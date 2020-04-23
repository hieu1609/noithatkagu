<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\ProductReviews;
use App\Order;
use App\Transaction;
use App\Notification;
class UserController extends BaseApiController
{
    /**
     * @SWG\Put(
     *     path="/user/edit-user-profile",
     *     description="Edit your profile",
     *     tags={"User"},
     *     summary="Edit profile",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit your profile",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="name",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="phone",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="address",
     *                  type="string",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function editUserProfile(Request $request)
    {
        try {
            $validator = User::validate($request->all(), 'Edit_User_Profile');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $user = User::where(['id' => $request->user->id])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return $this->responseSuccess($user);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/user/post-review",
     *     description="Post review product",
     *     tags={"User"},
     *     summary="Post review product",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post review product",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *               @SWG\property(
     *                  property="comment",
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
    public function postReview(Request $request)
    {
        try {
            $validator = ProductReviews::validate($request->all(), 'Post_Review');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            if($request->rating > 5 or $request->rating < 1) {
                return $this->responseErrorCustom("rating_incorrect", 403);
            }
            $checkProduct = Product::where([['product_id', $request->productId]])->first();
            if (!$checkProduct){
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            else {
                $productReviews = ProductReviews::updateOrCreate(
                    [
                        'user_id' => $request->user->id,
                        'product_id' => $request->productId,
                    ],
                    [
                        'user_id' => $request->user->id,
                        'product_id' => $request->productId,
                        'rating' => $request->rating,
                        'comment' => $request->comment,
                    ]
                );
                $getAVG = ProductReviews::getAVGRatingProduct($request->productId);
                $checkProduct->rating = $getAVG;
                $checkProduct->save();
            }
            return $this->responseSuccess($checkProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    public function sendFeedback(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/user/send-feedback",
         *     description="Send feedback for admin",
         *     tags={"User"},
         *     summary="Send feedback",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Parameter(
         *          name="body",
         *          description="Send feedback for admin",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="title",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="content",
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

        try {
            $validator = Feedback::validate($request->all(), 'Send_Feedback');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            
            $feedback = new Feedback();
            $feedback->user_id = $request->user->id;
            $feedback->title = $request->title;
            $feedback->content = $request->content;
            $feedback->save();
            return $this->responseSuccess("Thanks for your feedback!");

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

}
