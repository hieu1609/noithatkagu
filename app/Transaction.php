<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends BaseModel
{
    protected $primaryKey = 'transaction_id';
    protected $table = 'transaction';
    protected $fillable = [
        'transaction_id', 'order_id', 'total_price', 'payment_infor', 'user_request', 'security',
    ];

    public static $rules = array(

    );
    
}
