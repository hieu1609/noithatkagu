<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends BaseModel
{
    protected $table = 'order';
    protected $fillable = [
        'transaction_id', 'product_id', 'product_name', 'product_price', 'quantity', 'status',
    ];

    public static $rules = array(
        'Post_Infor_User' => [
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9\-\+]{9,15}$/',
            'address' => 'required|string',
            'email' => 'required|regex:/^[a-z][a-z0-9_\.]{2,}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/',
        ],

    );
}
