<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends BaseModel
{
    protected $table = 'order';
    protected $fillable = [
        'user_id', 'name', 'phone', 'email', 'address', 'total_price','payment','payment_infor','user_request','security'
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
