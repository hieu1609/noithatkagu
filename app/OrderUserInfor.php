<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderDetail;

class OrderUserInfor extends BaseModel
{
    protected $primaryKey = 'order_id';
    protected $table = 'order_user_infor';
    protected $fillable = [
        'order_id', 'user_id', 'name', 'phone', 'email', 'address', 'total_price', 'payment_method', 'paid',
    ];

    public static $rules = array(
        'Post_User_Infor' => [
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9\-\+]{9,15}$/',
            'address' => 'required|string',
            'deliveryOption' => 'required|string',
            'email' => 'required|regex:/^[a-z][a-z0-9_\.]{2,}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/',
            'firstPrice' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ],
        'Delete_Purchases_Admin' => [
            'id' => 'required|integer',
        ]

    );

    public static function getOrderId() {
        return OrderUserInfor::select('order_id')
        ->orderBy('order_id', 'desc')
        ->limit(1)
        ->get();
    }

    public static function getOrderInfor($orderId) {
        $data = OrderUserInfor::where('order_id', $orderId)
        ->get();
        $orderInfor = $data[0];
        $orderInfor->detail = OrderDetail::getOrderDetail($orderId);
        $orderInfor->status = "order";
        return $orderInfor;
    }
}
