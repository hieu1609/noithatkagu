<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\OrderUserInfor;
use App\Product;

class CartController extends BaseApiController
{
    /**
     * @SWG\Post(
     *     path="/cart/post-user-infor",
     *     description="Post user information",
     *     tags={"Cart"},
     *     summary="Post user information",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post user information",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="userId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="name",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="phone",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="email",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="address",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="deliveryOption",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="totalPrice",
     *                  type="integer",
     *              ),
     *               @SWG\property(
     *                  property="paymentMethod",
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
    public function postUserInfor(Request $request)
    {
        try {
            $validator = OrderUserInfor::validate($request->all(), 'Post_User_Infor');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userInfor = new OrderUserInfor;
            $userInfor->user_id = $request->userId;
            $userInfor->name = $request->name;
            $userInfor->phone = $request->phone;
            $userInfor->email = $request->email;
            $userInfor->address = $request->address;
            $userInfor->delivery_option = $request->deliveryOption;
            $userInfor->total_price = $request->totalPrice;
            $userInfor->payment_method = $request->paymentMethod;
            $userInfor->save();
            return $this->responseSuccess(OrderUserInfor::getOrderId());
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/cart/post-order-detail",
     *     description="Post order detail",
     *     tags={"Cart"},
     *     summary="Post order detail",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post order detail",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="orderId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *               @SWG\property(
     *                  property="productName",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="productPrice",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="quantity",
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
    public function postOrderDetail(Request $request)
    {
        try {
            $validator = OrderDetail::validate($request->all(), 'Post_Order_Detail');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderId = OrderUserInfor::where(['order_id' => $request->orderId])->first();
            if (!$checkOrderId) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            $checkProductId = Product::where(['product_id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $request->orderId;
            $orderDetail->product_id = $request->productId;
            $orderDetail->product_name = $request->productName;
            $orderDetail->product_price = $request->productPrice;
            $orderDetail->quantity = $request->quantity;
            $orderDetail->save();
            return $this->responseSuccess("Post order table successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
}
