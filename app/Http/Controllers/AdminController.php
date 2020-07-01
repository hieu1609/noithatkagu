<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\OrderUserInfor;
use App\ProductReviews;
use App\Notification;
use App\Feedback;
use App\OrderDetail;
use App\TransactionPaypal;
use App\TopProducts;
use App\Product;
use App\Category;
use App\ProductImage;
use App\ProductNumber;
use App\SlideShow;
use App\DiscountCode;
use Carbon\Carbon;

class AdminController extends BaseApiController
{
    /**
     * @SWG\Post(
     *     path="/admin/get-user-admin",
     *     description="Get user",
     *     tags={"Admin"},
     *     summary="Get user",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get user",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="page",
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
    public function getUserAdmin(Request $request)
    {
        try {
            $validator = User::validate($request->all(), 'Get_User_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = User::getUserAdmin($request->page);
            $result['numPage'] = ceil(User::count()/5);
            $result['total'] = User::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/add-user",
     *     description="Add user",
     *     tags={"Admin"},
     *     summary="Add user",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add user",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="email",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="password",
     *                  type="string",
     *              ),
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
     *              @SWG\Property(
     *                  property="admin",
     *                  type="boolean",
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

    public function addUser(Request $request)
    {

        try {
            $validator = User::validate($request->all(), 'Rule_AddUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $user = new User;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->admin = $request->admin;
            $user->save();
            return $this->responseSuccess("Add User successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Put(
     *     path="/admin/{id}",
     *     description="Edit user",
     *     tags={"Admin"},
     *     summary="Edit user",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID user to edit",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit user",
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
     *              @SWG\Property(
     *                  property="admin",
     *                  type="boolean",
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

    public function editUser(Request $request)
    {
        try {
            $input = $request->all();
            $input['userId'] = $request->id;

            $validator = User::validate($input, 'Rule_EditUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userId = $request->id;
            $user = User::where(['id' => $userId])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $countAdmin = User::where(['admin' => 1])->count();
            if ($countAdmin <= 1 && $request->admin == false && $user->admin == true) {
                return $this->responseErrorCustom("can_not_edit_user", 403); //min number of admin is 1
            }

            $request->admin ?  $user->admin = 1 : $user->admin = 0;
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
     * @SWG\Delete(
     *     path="/admin/{id}",
     *     description="Delete user",
     *     tags={"Admin"},
     *     summary="Delete user",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID user to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deleteUser(Request $request)
    {

        try {
            $validator = User::validate(["userId" => $request->id], 'Rule_DeleteUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userId = $request->id; //only for easy to under what is $request->id.
            $user = User::where(['id' => $userId])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $orderTable = OrderUserInfor::where(['user_id' => $userId])->first();
            if ($orderTable) {
                return $this->responseErrorCustom("already_in_orderuserinfor_table", 403);
                //delete user order infor
            }

            $productReview = ProductReviews::where(['user_id' => $userId])->first();
            if ($productReview) {
                return $this->responseErrorCustom("already_in_product_reviews_table", 403);
            }

            $notifications = Feedback::where(['user_id' => $userId])->first();
            if ($notifications) {
                return $this->responseErrorCustom("already_in_feedback_table", 403);
            }

            $notificationr = Notification::where(['user_id_receive' => $userId])->first();
            if ($notificationr) {
                return $this->responseErrorCustom("already_in_notification_table", 403);
            }
            $countAdmin = User::where(['admin' => 1])->count();
            if ($countAdmin <= 1 && $user->admin == true) {
                return $this->responseErrorCustom("can_not_delete_user", 403); //Forbidden
            }

            $user->delete();
            return $this->responseSuccess("Delete user successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Delete(
     *     path="/admin/order/{id}",
     *     description="Delete purchases admin",
     *     tags={"Admin"},
     *     summary="Delete purchases admin",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID purchases to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deletePurchasesAdmin(Request $request)
    {
        try {
            $input['id'] = $request->id;
            $validator = OrderUserInfor::validate($input, 'Delete_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderUserInfor = OrderUserInfor::where(['order_id' => $request->id])->first();
            if (!$checkOrderUserInfor) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            $checkTransaction = TransactionPaypal::where(['order_id' => $request->id])->first();
            if ($checkTransaction){
                $checkTransaction->delete();
            }
            while (OrderDetail::where(['order_id' => $request->id])->first())
            {
                $checkOrderDetail = OrderDetail::where(['order_id' => $request->id])->first();
                $oldProductId = $checkOrderDetail->product_id;
                $checkOrderDetail->delete();
                $totalProduct = OrderDetail::getTotalProductsById($oldProductId);
                TopProducts::updateOrCreate(
                    [
                        'product_id' => $oldProductId,
                    ],
                    [
                        'product_id' => $oldProductId,
                        'total_products' => $totalProduct,
                    ]
                );
            }
            $checkOrderUserInfor->delete();
            
            return $this->responseSuccess("Delete successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
        /**
     * @SWG\Post(
     *     path="/admin/get-feedback-admin",
     *     description="Get feedback",
     *     tags={"Admin"},
     *     summary="Get feedback",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get feedback",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="page",
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
    public function getFeedbackAdmin(Request $request)
    {
        try {
            $validator = Feedback::validate($request->all(), 'Get_Feedback_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = Feedback::count();
            $result['data'] = Feedback::getFeedbackAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/get-notifications-admin",
     *     description="Get notifications",
     *     tags={"Admin"},
     *     summary="Get notifications",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get notifications",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="page",
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
    public function getNotificationsAdmin(Request $request)
    {

        try {
            $validator = Notification::validate($request->all(), 'Get_Notifications_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = Notification::where(['user_id_receive' => 1])->count();
            $result['data'] = Notification::getNotificationsAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

        /**
     * @SWG\Post(
     *     path="/admin/send-notification",
     *     description="Send notification for user",
     *     tags={"Admin"},
     *     summary="Send notification",
     *     security={{"jwt":{}}},
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Send notification for user",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="userId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="notificationTitle",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="notificationContent",
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

    public function sendNotification(Request $request)
    {

        try {
            $validator = Notification::validate($request->all(), 'Send_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            
            $checkId = User::where(['id' => $request->userId])->first();
            if (!$checkId) {
                return $this->responseErrorCustom("id_not_found", 404);
            }

            if ($request->userId === $request->user->id) {
                return $this->responseErrorCustom("that_is_your_id", 403);
            }
            $notification = new Notification;
            $notification->user_id_receive = $request->userId;
            $notification->title = $request->notificationTitle;
            $notification->content = $request->notificationContent;
            $notification->save();
            return $this->responseSuccess("Send notification successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/send-notification-for-all-users",
     *     description="Send notification for all users",
     *     tags={"Admin"},
     *     summary="Send notification",
     *     security={{"jwt":{}}},
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Send notification for all users",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="notificationTitle",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="notificationContent",
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

    public function sendNotificationForAllUsers(Request $request)
    {

        try {
            $validator = Notification::validate($request->all(), 'Send_Notification_All_Users');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $allUserId = User::getUserId();
            for ($i = 0; $i < count($allUserId); $i++) {
                $notification = new Notification;
                $notification->user_id_receive = $allUserId[$i]->id;
                $notification->title = $request->notificationTitle;
                $notification->content = $request->notificationContent;
                $notification->save();
            }
            return $this->responseSuccess("Send notification for all users successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Put(
     *     path="/admin/notification/{notificationId}",
     *     description="Edit notification",
     *     tags={"Admin"},
     *     summary="Edit notification",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID notification to edit",
     *         in="path",
     *         name="notificationId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit notification",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="userIdReceive",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="notificationTitle",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="notificationContent",
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
    public function editNotification(Request $request)
    {

        try {
            $input = $request->all();
            $input['notificationId'] = $request->notificationId;
            $validator = Notification::validate($input, 'Edit_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkUserIdReceive = User::where(['id' => $request->userIdReceive])->first();
            if (!$checkUserIdReceive) {
                return $this->responseErrorCustom("user_id_receive_not_found", 404);
            }
            
            $checkNotification = Notification::where(['id' => $request->notificationId])->first();
            if (!$checkNotification) {
                return $this->responseErrorCustom("notification_id_not_found", 404);
            }
            $checkNotification->user_id_receive = $request->userIdReceive;
            $checkNotification->title = $request->notificationTitle;
            $checkNotification->content = $request->notificationContent;
            $checkNotification->save();
            return $this->responseSuccess($checkNotification);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Delete(
     *     path="/admin/notification/{notificationId}",
     *     description="Delete notification",
     *     tags={"Admin"},
     *     summary="Delete notification",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID notification to delete",
     *         in="path",
     *         name="notificationId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function deleteNotification(Request $request)
    {
        try {
            $input['notificationId'] = $request->notificationId;
            $validator = Notification::validate($input, 'Delete_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkNotification = Notification::where(['id' => $request->notificationId])->first();
            if (!$checkNotification) {
                return $this->responseErrorCustom("notification_id_not_found", 404);
            }

            $checkNotification->delete();
            return $this->responseSuccess("Delete notification successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/get-product-admin",
     *     description="Get product",
     *     tags={"Admin"},
     *     summary="Get product",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get product",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="page",
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

    public function getProductAdmin(Request $request)
    {

        try {
            $validator = Product::validate($request->all(), 'Get_Product_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = Product::getProductAdmin($request->page);
            $result['numPage'] = ceil(Product::count()/10);
            $result['total'] = Product::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Get(
     *     path="/admin/get-all-product-admin",
     *     description="Get all product",
     *     tags={"Admin"},
     *     summary="Get all product",
     *     security={{"jwt":{}}},
     * 
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function getAllProductAdmin(Request $request)
    {

        try {
            $result = Product::get();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/add-product",
     *     description="Add product",
     *     tags={"Admin"},
     *     summary="Add product",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add product",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="productName",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="productFkPrice",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productPrice",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="productMaterial",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="productSize",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="productColor",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="tag",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="infor",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="categoryId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="rating",
     *                  type="integer",
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

    public function addProduct(Request $request)
    {

        try {
            $validator = Product::validate($request->all(), 'Add_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = Category::where(['cat_id' => $request->categoryId])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $product = new Product;
            $product->product_name = $request->productName;
            $product->product_fk_price = $request->productFkPrice;
            $product->product_price = $request->productPrice;
            $product->material = $request->productMaterial;
            $product->size = $request->productSize;
            $product->color = $request->productColor;
            $product->infor = $request->infor;
            $product->tag = $request->tag;
            $product->cat_id = $request->categoryId;
            $product->rating = $request->rating;
            $product->save();
            return $this->responseSuccess("Add product successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Put(
     *     path="/admin/product/{productId}",
     *     description="Edit product",
     *     tags={"Admin"},
     *     summary="Edit product",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID product to edit",
     *         in="path",
     *         name="productId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit product",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="productName",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="productFkPrice",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productPrice",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="productMaterial",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="productSize",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="productColor",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="tag",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="infor",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="categoryId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="rating",
     *                  type="integer",
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
    public function editProduct(Request $request)
    {

        try {
            $input = $request->all();
            $input['productId'] = $request->productId;
            $validator = Product::validate($input, 'Edit_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = Category::where(['cat_id' => $request->categoryId])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $checkProductId = Product::where(['product_id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $checkProductId->product_name = $request->productName;
            $checkProductId->product_fk_price = $request->productFkPrice;
            $checkProductId->product_price = $request->productPrice;
            $checkProductId->material = $request->productMaterial;
            $checkProductId->size = $request->productSize;
            $checkProductId->color = $request->productColor;
            $checkProductId->infor = $request->infor;
            $checkProductId->tag = $request->tag;
            $checkProductId->cat_id = $request->categoryId;
            $checkProductId->rating = $request->rating;
            $checkProductId->save();
            return $this->responseSuccess($checkProductId);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Delete(
     *     path="/admin/product/{productId}",
     *     description="Delete product",
     *     tags={"Admin"},
     *     summary="Delete product",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID product to delete",
     *         in="path",
     *         name="productId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */

    public function deleteProduct(Request $request)
    {

        try {
            $input['productId'] = $request->productId;
            $validator = Product::validate($input, 'Delete_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkProductId = Product::where(['product_id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $checkOrderProduct = OrderDetail::where(['product_id' => $request->productId])->first();
            if ($checkOrderProduct) {
                return $this->responseErrorCustom("could_not_delete_product", 403);
            }
            $productReview = ProductReviews::where(['product_id' => $request->productId])->first();
            if ($productReview) {
                return $this->responseErrorCustom("already_in_product_reviews_table", 403);
            }
            $productNumber = ProductNumber::where(['product_id' => $request->productId])->first();
            if ($productNumber) {
                $productNumber ->delete();
            }
            $topProduct = TopProducts::where(['product_id' => $request->productId])->first();
            if ($topProduct) {
                $topProduct->delete();
            }
            $checkProductId->delete();
            return $this->responseSuccess("Delete product successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/get-slide-show-admin",
     *     description="Get slide show",
     *     tags={"Admin"},
     *     summary="Get slide show",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get slide show",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="page",
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
    public function getSlideShowAdmin(Request $request)
    {
        try {
            $validator = SlideShow::validate($request->all(), 'Get_Slide_Show_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = SlideShow::getSlideShowAdmin($request->page);
            $result['numPage'] = ceil(SlideShow::count()/10);
            $result['total'] = SlideShow::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
    /**
     * @SWG\Post(
     *     path="/admin/addSlideShow",
     *     description="Add slide show",
     *     tags={"Admin"},
     *     summary="Add slide show",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add slide show",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="image",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="title",
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
   
    public function addSlideShow(Request $request)
    {

        try {
            $validator = SlideShow::validate($request->all(), 'Add_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $slideShow = new SlideShow;
            $slideShow->image = $request->image;
            $slideShow->title = $request->title;
            $slideShow->save();
            return $this->responseSuccess("Add slide show successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    /**
     * @SWG\Put(
     *     path="/admin/slideshow/{slideShowId}",
     *     description="Edit slide show",
     *     tags={"Admin"},
     *     summary="Edit slide show",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID slide show to edit",
     *         in="path",
     *         name="slideShowId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit slide show",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="image",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="title",
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

    public function editSlideShow(Request $request)
    {

        try {
            $input = $request->all();
            $input['slideShowId'] = $request->slideShowId;
            $validator = SlideShow::validate($input, 'Edit_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $checkSlideShowId = SlideShow::where(['id' => $request->slideShowId])->first();
            if (!$checkSlideShowId) {
                return $this->responseErrorCustom("slide_show_id_not_found", 404);
            }

            $checkSlideShowId->image = $request->image;
            $checkSlideShowId->title = $request->title;
            $checkSlideShowId->save();
            return $this->responseSuccess($checkSlideShowId);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Delete(
     *     path="/admin/slideshow/{slideShowId}",
     *     description="Delete slide show",
     *     tags={"Admin"},
     *     summary="Delete slide show",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID slide show to delete",
     *         in="path",
     *         name="slideShowId",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     *)
     */
    public function deleteSlideShow(Request $request)
    {

        try {
            $input['slideShowId'] = $request->slideShowId;
            $validator = SlideShow::validate($input, 'Delete_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkSlideShowId = SlideShow::where(['id' => $request->slideShowId])->first();
            if (!$checkSlideShowId) {
                return $this->responseErrorCustom("slide_show_id_not_found", 404);
            }
            $checkSlideShowId->delete();
            return $this->responseSuccess("Delete slide show successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/admin/add-product-image",
     *     description="Add product image",
     *     tags={"Admin"},
     *     summary="Add product image",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add product image",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productImage",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="imageDescription",
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
    public function addProductImage(Request $request)
    {
        try {
            $validator = ProductImage::validate($request->all(), 'Add_Image');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $productImage = new ProductImage;
            $productImage->product_id = $request->productId;
            $productImage->product_image = $request->productImage;
            $productImage->image_description = $request->imageDescription;
            $productImage->save();
            return $this->responseSuccess("Add Product Image successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Put(
     *     path="/admin/image/{id}",
     *     description="Edit product image",
     *     tags={"Admin"},
     *     summary="Edit product image",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID product image",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit product image",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productImage",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="imageDescription",
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
    public function editProductImage(Request $request)
    {
        try {
            $input = $request->all();
            $input['productImageId'] = $request->id;

            $validator = ProductImage::validate($input, 'Edit_Product_Image');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $productImageId = $request->id;
            $productImage = ProductImage::where(['id' => $productImageId])->first();
            if (!$productImage) {
                return $this->responseErrorCustom("product_image_not_found", 404);
            }
            $productImage->product_id = $request->productId;
            $productImage->product_image = $request->productImage;
            $productImage->image_description = $request->imageDescription;
            $productImage->save();
            return $this->responseSuccess($productImage);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Delete(
     *     path="/admin/image/{id}",
     *     description="Delete product image",
     *     tags={"Admin"},
     *     summary="Delete product image",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID product image delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deleteProductImage(Request $request)
    {

        try {
            $validator = ProductImage::validate(["productImageId" => $request->id], 'Delete_Product_Image');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $productImageId = $request->id; //only for easy to under what is $request->id.
            $productImage = ProductImage::where(['id' => $productImageId])->first();
            if (!$productImage) {
                return $this->responseErrorCustom("product_image_not_found", 404);
            }
            $productImage->delete();
            return $this->responseSuccess("Delete Product Image successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/admin/add-product-number",
     *     description="Add product number",
     *     tags={"Admin"},
     *     summary="Add product number",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add product number",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productNumber",
     *                  type="integer",
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
    public function addProductNumber(Request $request)
    {
        try {
            $validator = ProductNumber::validate($request->all(), 'Add_Number');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkProductId = ProductNumber::where('product_id', $request->productId)->first();
            if ($checkProductId) {
                return $this->responseErrorCustom("product_id_has_already_existed", 403);
            }
            $productNumber = new ProductNumber;
            $productNumber->product_id = $request->productId;
            $productNumber->product_number = $request->productNumber;
            $productNumber->save();
            return $this->responseSuccess("Add Product number successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Put(
     *     path="/admin/number/{id}",
     *     description="Edit product number",
     *     tags={"Admin"},
     *     summary="Edit product number",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID product number",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit product number",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productNumber",
     *                  type="integer",
     *              ),
     * 
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
    public function editProductNumber(Request $request)
    {
        try {
            $input = $request->all();
            $input['productNumberId'] = $request->id;
            $validator = ProductNumber::validate($input, 'Edit_Product_Number');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $productNumberId = $request->id;
            $productNumber = ProductNumber::where(['product_id' => $productNumberId])->first();
            if (!$productNumber) {
                return $this->responseErrorCustom("product_number_not_found", 404);
            }
            $productNumber->product_number = $request->productNumber;
            $productNumber->save();
            return $this->responseSuccess("Edit Product number successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Delete(
     *     path="/admin/number/{id}",
     *     description="Delete product number",
     *     tags={"Admin"},
     *     summary="Delete product number",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID product number you want to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deleteProductNumber(Request $request)
    {

        try {
            $validator = ProductNumber::validate(["productId" => $request->id], 'Delete_Product_Number');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $productNumberId = $request->id; //only for easy to under what is $request->id.
            $productNumber = ProductNumber::where(['id' => $productNumberId])->first();
            if (!$productNumber) {
                return $this->responseErrorCustom("product_number_not_found", 404);
            }
            $productNumber->delete();
            return $this->responseSuccess("Delete Product number successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/admin/add-product-review",
     *     description="Add product review",
     *     tags={"Admin"},
     *     summary="Add product review",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add product review",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="userId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="comment",
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
    public function addProductReview(Request $request)
    {
        try {
            $validator = ProductReviews::validate($request->all(), 'Add_Review');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkUserId = User::where('id', $request->userId)->first();
            if (!$checkUserId) {
                return $this->responseErrorCustom("user_not_found", 404);
            }
            $checkProductId = Product::where('product_id', $request->productId)->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_not_found", 404);
            }
            if($request->rating > 5 or $request->rating < 1) {
                return $this->responseErrorCustom("rating_incorrect", 403);
            }
            $productReview = new ProductReviews;
            $productReview->user_id = $request->userId;
            $productReview->product_id = $request->productId;
            $productReview->rating = $request->rating;
            $productReview->comment = $request->comment;            
            $productReview->save();
            return $this->responseSuccess("Add Product Review successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Put(
     *     path="/admin/review/{id}",
     *     description="Edit product review",
     *     tags={"Admin"},
     *     summary="Edit product review",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID product review",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit product review",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="userId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\Property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="comment",
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
    public function editProductReview(Request $request)
    {
        try {
            $input = $request->all();
            $input['productReviewId'] = $request->id;
            $validator = ProductReviews::validate($input, 'Edit_Product_Review');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $productReviewId = $request->id;
            $productReview = ProductReviews::where(['id' => $productReviewId])->first();
            if (!$productReview) {
                return $this->responseErrorCustom("product_review_not_found", 404);
            }
            $checkUserId = User::where('id', $request->userId)->first();
            if (!$checkUserId) {
                return $this->responseErrorCustom("user_not_found", 404);
            }
            $checkProductId = Product::where('product_id', $request->productId)->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_not_found", 404);
            }
            if($request->rating > 5 or $request->rating < 1) {
                return $this->responseErrorCustom("rating_incorrect", 403);
            }
            $productReview->user_id = $request->userId;
            $productReview->product_id = $request->productId;
            $productReview->rating = $request->rating;
            $productReview->comment = $request->comment;            
            $productReview->save();
            return $this->responseSuccess("Edit Product Review successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Delete(
     *     path="/admin/review/{id}",
     *     description="Delete product review",
     *     tags={"Admin"},
     *     summary="Delete product review",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID product review you want to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deleteProductReview(Request $request)
    {

        try {
            $validator = ProductReviews::validate(["id" => $request->id], 'Delete_Product_Review');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $productReviewId = $request->id; //only for easy to under what is $request->id.
            $productReview = ProductReviews::where(['id' => $productReviewId])->first();
            if (!$productReview) {
                return $this->responseErrorCustom("product_number_not_found", 404);
            }
            $productReview->delete();
            return $this->responseSuccess("Delete Product number successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/admin/add-discount-code",
     *     description="Add discount code",
     *     tags={"Admin"},
     *     summary="Add discount code",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Add discount code",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="description",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="code",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="values",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="time",
     *                  type="integer",
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

    public function addDiscountCode(Request $request)
    {
        try {
            $validator = DiscountCode::validate($request->all(), 'Add_Discount_Code');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $expires_at = Carbon::now()->addDays($request->time);
            $discountCode = new DiscountCode;
            $discountCode->description = $request->description;
            $discountCode->code = $request->code;
            $discountCode->values = $request->values;
            $discountCode->expires_at = $expires_at->format('Y-m-d H:i:s');            
            $discountCode->save();
            return $this->responseSuccess("Add discount code successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Put(
     *     path="/admin/discount/{id}",
     *     description="Edit discount code",
     *     tags={"Admin"},
     *     summary="Edit discount code",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *         description="ID discount code",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *      @SWG\Parameter(
     *          name="body",
     *          description="Edit discount code",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="description",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="code",
     *                  type="string",
     *              ),
     *              @SWG\Property(
     *                  property="values",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="time",
     *                  type="integer",
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
    public function editDiscountCode(Request $request)
    {
        try {
            $input = $request->all();
            $input['id'] = $request->id;
            $validator = DiscountCode::validate($input, 'Edit_Discount_Code');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $discountCodeId = $request->id;
            $checkDiscountCodeId = DiscountCode::where(['id' => $discountCodeId])->first();
            if (!$checkDiscountCodeId) {
                return $this->responseErrorCustom("discount_code_not_found", 404);
            }
            $expires_at = Carbon::now()->addDays($request->time);
            $checkDiscountCodeId->description = $request->description;
            $checkDiscountCodeId->code = $request->code;
            $checkDiscountCodeId->values = $request->values;
            $checkDiscountCodeId->expires_at = $expires_at->format('Y-m-d H:i:s');          
            $checkDiscountCodeId->save();
            return $this->responseSuccess("Edit discount code successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Delete(
     *     path="/admin/discount/{id}",
     *     description="Delete discount code",
     *     tags={"Admin"},
     *     summary="Delete discount code",
     *     security={{"jwt":{}}},
     *     @SWG\Parameter(
     *         description="ID discount code you want to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *      ),
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function deleteDiscountCode(Request $request)
    {
        try {
            $validator = DiscountCode::validate(["id" => $request->id], 'Delete_Discount_Code');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $discountCodeId = $request->id;
            $checkDiscountCodeId = DiscountCode::where(['id' => $discountCodeId])->first();
            if (!$checkDiscountCodeId) {
                return $this->responseErrorCustom("discount_code_not_found", 404);
            }
            $checkDiscountCodeId->delete();
            return $this->responseSuccess("Delete discount code successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
}