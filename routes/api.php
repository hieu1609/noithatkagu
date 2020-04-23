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
    Route::get('get-slide-show', 'DataController@getSlideShow');
    Route::get('get-product-category', 'DataController@getProductCategory');
    Route::post('get-product-by-category-id', 'DataController@getProductByCategoryId');
    Route::get('get-new-product', 'DataController@getNewProduct');
    Route::post('getCommentByProductId', 'DataController@getCommentByProductId');

    //Detail page
    Route::post('get-comment-product', 'DataController@getCommentByProductId');
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
    });
});