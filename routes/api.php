<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('request/reset-password', 'AuthController@requestResetPassword');
    Route::post('accept/reset-password', 'AuthController@acceptResetPassword');
    Route::group(['middleware' => ['jwt']], function () {
        Route::put('change-password', 'AuthController@changePassword');
        Route::post('logout', 'AuthController@logout');
    });
});

//Route Data
Route::group(['prefix' => 'data'], function () {
    //Search
    Route::post('search-product', 'DataController@searchProduct');

    //Home page
    Route::get('get-slide-show', 'DataController@getSlideShow'); //0
    Route::get('get-best-selling-products', 'DataController@getBestSellingProducts'); //0
    Route::get('get-product-category', 'DataController@getProductCategory'); //0
    Route::get('get-new-product', 'DataController@getNewProduct'); //0
    Route::post('get-product-by-category-id', 'DataController@getProductByCategoryId'); //1
    
    //Detail page
    Route::post('get-product-detail', 'DataController@getProductDetail'); //1
    Route::post('get-comment-product', 'DataController@getCommentByProductId'); //1
    Route::post('get-related-products', 'DataController@getRelatedProducts'); //1
});
//Route User
Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => ['jwt']], function () {
        //Profile
        Route::put('edit-user-profile', 'UserController@editUserProfile');

        //Review
        Route::post('post-review', 'UserController@postReview');
        
        //Feedback
        Route::post('send-feedback', 'UserController@sendFeedback');
        //Notification
        Route::post('get-notifications', 'UserController@getNotifications');
    });
});

//Route Cart
Route::group(['prefix' => 'cart'], function () {
    Route::post('post-user-infor', 'CartController@postUserInfor');
    Route::post('post-order-detail', 'CartController@postOrderDetail');
});

//Route Paypal
Route::group(['prefix' => 'payment'], function () {
    Route::post('create-payment', 'PaymentController@createPayment');
    Route::post('execute-payment', 'PaymentController@executePayment');
    Route::get('payment-details/{paypalId}', 'PaymentController@getPaymentDetails');
});

//Route Admin
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['jwt', 'admin'])->group(function () {
        //User
        Route::post('get-user-admin', 'AdminController@getUserAdmin');
        Route::post('add-user', 'AdminController@addUser');
        Route::put('/{id}', 'AdminController@editUser');
        Route::delete('/{id}', 'AdminController@deleteUser');
        //Order
        Route::delete('order/{id}', 'AdminController@deletePurchasesAdmin');;
        //Feedback
        Route::post('get-feedback-admin', 'AdminController@getFeedbackAdmin');
        //Notifications
        Route::post('get-notifications-admin', 'AdminController@getNotificationsAdmin');
        Route::post('send-notification', 'AdminController@sendNotification');
        Route::post('send-notification-for-all-users', 'AdminController@sendNotificationForAllUsers');
        Route::put('notification/{notificationId}', 'AdminController@editNotification');
        Route::delete('notification/{notificationId}', 'AdminController@deleteNotification');
        //Product
        Route::post('get-product-admin', 'AdminController@getProductAdmin');
        Route::get('get-all-product-admin', 'AdminController@getAllProductAdmin');
        Route::post('add-product', 'AdminController@addProduct');
        Route::put('product/{productId}', 'AdminController@editProduct');
        Route::delete('product/{productId}', 'AdminController@deleteProduct');
        //Slide show
        Route::post('get-slide-showAdmin', 'AdminController@getSlideShowAdmin');
        Route::post('add-slide-show', 'AdminController@addSlideShow');
        Route::put('slideshow/{slideShowId}', 'AdminController@editSlideShow');
        Route::delete('slideshow/{slideShowId}', 'AdminController@deleteSlideShow');  
        //Product Image
        Route::post('add-product-image', 'AdminController@addProductImage');
        Route::put('image/{id}', 'AdminController@editProductImage');
        Route::delete('image/{id}', 'AdminController@deleteProductImage');
    });
});