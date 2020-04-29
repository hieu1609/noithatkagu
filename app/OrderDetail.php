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
        'Post_Order_Detail' => [
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'quantity' => 'required|integer',
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

}
