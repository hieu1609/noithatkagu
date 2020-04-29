<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use App\Services\PayPalService;
use App\TransactionPaypal;
use App\OrderDetail;
use App\OrderUserInfor;

class PaymentController extends BaseApiController
{
    public function __construct()
    {
        $this->result = [
            'error' => false,
            'data' => null,
            'errors' => []
        ];
        $this->statusCode = 200;
        $this->apiError = Lang::get('errorCodeApi');

        $paypalConfigs = config('paypal');

        $this->apiContext = new ApiContext(
        	new OAuthTokenCredential(
            	$paypalConfigs['client_id'],
                $paypalConfigs['secret']
            )
        );
        $this->apiContext->setConfig($paypalConfigs['settings']);
    }

    /**
     * @SWG\Post(
     *     path="/payment/create-payment",
     *     description="create payment",
     *     tags={"Payment"},
     *     summary="create payment",
     *      @SWG\Parameter(
     *          name="body",
     *          description="Create payment",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="orderId",
     *                  type="integer",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function createPayment(Request $request)
    {
        try {
            $validator = TransactionPaypal::validate($request->all(), 'Create_Payment');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderId = OrderUserInfor::where(['order_id' => $request->orderId])->first();
            if (!$checkOrderId) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            if ($checkOrderId->payment_method != "paypal") {
                return $this->responseErrorCustom("payment_method_not_valid", 403);
            }
            if ($checkOrderId->paid == 1) {
                return $this->responseErrorCustom("the_order_has_been_paid", 403);
            }
            $orderDetail = OrderDetail::getOrderDetail($request->orderId);

            $payer = new Payer();
            $payer->setPaymentMethod("paypal");

            $subtotal = 0.0;
            $shipping = 1;
            $itemList = new ItemList();
            foreach ($orderDetail as $value) {
                $item = new Item();
                $item->setName(TransactionPaypal::utf8convert($value->product_name));
                $item->setCurrency('USD');
                $item->setQuantity($value->quantity);
                $item->setPrice($value->product_price/23463);
                $itemList->addItem($item);
                $subtotal += ($value->quantity) * ($value->product_price/23463);
            }

            $subtotal = round ($subtotal , 2);

            $details = new Details();
            $details->setShipping($shipping)
                ->setSubtotal($subtotal);

            $amount = new Amount();
            $amount->setCurrency("USD")
                ->setTotal($subtotal + $shipping)
                ->setDetails($details);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription("Payment description")
                ->setInvoiceNumber(uniqid());
            
            $baseUrl = "http://localhost:800";
            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
                ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");

            $payment = new Payment();
            $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));
            
            $payment->create($this->apiContext);
            return $payment;
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/payment/execute-payment",
     *     description="execute payment",
     *     tags={"Payment"},
     *     summary="execute payment",
     *      @SWG\Parameter(
     *          name="body",
     *          description="execute payment",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="orderId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="paypalId",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="payerId",
     *                  type="string",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function executePayment(Request $request)
    {
        try {
            $validator = TransactionPaypal::validate($request->all(), 'Execute_Payment');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderId = OrderUserInfor::where(['order_id' => $request->orderId])->first();
            if (!$checkOrderId) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }

            $checkPaypalId = TransactionPaypal::where(['paypal_id' => $request->paypalId])->first();
            if ($checkPaypalId) {
                return $this->responseErrorCustom("the_order_has_been_paid", 403);
            }

            $paypalId = $request->paypalId;
            $payment = Payment::get($paypalId, $this->apiContext);
            $payerId = $request->payerId;

            $execution = new PaymentExecution();
            $execution->setPayerId($payerId);
            try {
                $result = $payment->execute($execution, $this->apiContext);

                $transactionInfor =  new TransactionPaypal;
                $transactionInfor->order_id = $request->orderId;
                $transactionInfor->total_price = $result->transactions[0]->amount->total;
                $transactionInfor->currency = $result->transactions[0]->amount->currency;
                $transactionInfor->paypal_id = $result->id;
                $transactionInfor->payer_id = $result->payer->payer_info->payer_id;
                $transactionInfor->invoice_number = $result->transactions[0]->invoice_number;
                $transactionInfor->save();

                $checkOrderId->paid = 1;
                $checkOrderId->save();

                return $result;
            } 
            catch (PayPal\Exception\PayPalConnectionException $ex) {
                return $ex;
            } catch (Exception $ex) {
                return $ex;
            }
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }


    /**
     * @SWG\Get(
     *     path="/payment/payment-details/{paypalId}",
     *     description="Get payment details",
     *     tags={"Payment"},
     *     summary="Get payment details",
     *     @SWG\Parameter(
     *         description="Paypal id",
     *         in="path",
     *         name="paypalId",
     *         required=true,
     *         type="string",
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function getPaymentDetails(Request $request)
    {
        try {
            $validator = TransactionPaypal::validate(['paypalId' => $request->paypalId], 'Payment_Details');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $paypalId = $request->paypalId;
            $payment = Payment::get($paypalId, $this->apiContext);
            return $payment;

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
