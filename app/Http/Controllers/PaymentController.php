<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Services\PayPalService;

class PaymentController extends BaseApiController
{
    private $apiContext;

    public function __construct()
    {
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
            //join 2 bảng để lấy dữ liệu product
            return $request->orderId;
            $payer = new Payer();
            $payer->setPaymentMethod("paypal");

            $item1 = new Item();
            $item1->setName('Ground Coffee 40 oz')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setSku("123123") // Similar to `item_number` in Classic API
                ->setPrice(7.5);
            $item2 = new Item();
            $item2->setName('Granola bars')
                ->setCurrency('USD')
                ->setQuantity(5)
                ->setSku("321321") // Similar to `item_number` in Classic API
                ->setPrice(2);

            $itemList = new ItemList();
            $itemList->setItems(array($item1, $item2));

            $details = new Details();
            $details->setShipping(1.2)
                ->setTax(1.3)
                ->setSubtotal(17.50);

            $amount = new Amount();
            $amount->setCurrency("USD")
                ->setTotal(20)
                ->setDetails($details);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($itemList)
                ->setDescription("Payment description")
                ->setInvoiceNumber(uniqid());

            // $baseUrl = getBaseUrl();
            $baseUrl = "http://localhost/";
            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
                ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");

            $payment = new Payment();
            $payment->setIntent("sale")
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions(array($transaction));

            $request = clone $payment;
            try {
                $payment->create($this->apiContext);
                return $payment;
            } catch (Exception $ex) {
                return $ex;
            }
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/payment/get-payment-list",
     *     description="get payment list",
     *     tags={"Payment"},
     *     summary="get payment list",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPaymentList(Request $request)
    {
        $limit = 10;
        $offset = 0;
        $params = [
            'count' => $limit,
            'start_index' => $offset
        ];

        try {
            $payments = Payment::all($params, $this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        return $payments;
    }

    /**
     * @SWG\Get(
     *     path="/payment/get-payment-details",
     *     description="get payment details",
     *     tags={"Payment"},
     *     summary="get payment details",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPaymentDetails(Request $request)
    {
        try {
            $paymentId = "PAYID-L2RQQGA3N630959R7680973W";
            $paymentDetails = Payment::get($paymentId, $this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $paypalException) {
            throw new \Exception($paypalException->getMessage());
        }

        return $paymentDetails;
    }
}
