<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends BaseModel
{
    protected $table = 'order_detail';
    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'product_price', 'quantity', 'status',
    ];

    public static $rules = array(
        'Rule_Edit_Order_Detail' => [
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'quantity' => 'required|integer',
        ],
        'Post_Order_Detail' => [
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'quantity' => 'required|integer',
        ],
        'Get_New_Order_Admin' => [
            'page' => 'required|integer',

        ],
        'Get_Confirmed_Order_Admin' => [
            'page' => 'required|integer',

        ],
        'Get_Shipping_Order_Admin' => [
            'page' => 'required|integer',

        ],
        'Get_Complete_Order_Admin' => [
            'page' => 'required|integer',

        ],
    );

    public static function getOrderDetail($OrderId) {
        return OrderDetail::where('order_id', $OrderId)
        ->get();
    }
    public static function getTotalProductsById($productId) {
        return OrderDetail::where('product_id', $productId)
        ->where('status', 'finished')
        ->sum('quantity');
    }
    public static function getNewOrderAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_user_infor', 'order_detail.order_id', '=', 'order_user_infor.order_id')
        ->where('order_detail.status', 'none')
        ->orderBy('order_detail.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get(); 
    }
    public static function getConfirmedOrderAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_user_infor', 'order_detail.order_id', '=', 'order_user_infor.order_id')
        ->where('order_detail.status', 'confirmed')
        ->orderBy('order_detail.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get(); 
    }
    public static function getShippingOrderAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_user_infor', 'order_detail.order_id', '=', 'order_user_infor.order_id')
        ->where('order_detail.status', 'shipping')
        ->orderBy('order_detail.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get(); 
    }
    public static function getCompleteOrderAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_user_infor', 'order_detail.order_id', '=', 'order_user_infor.order_id')
        ->where('order_detail.status', 'finished')
        ->orderBy('order_detail.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get(); 
    }
    public static function getFeedbackAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Feedback::join('users', 'feedback.user_id', '=', 'users.id')
        ->orderBy('feedback.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get();
    }
}
