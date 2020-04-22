<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNumber extends BaseModel
{
    protected $table = 'product_number';
    protected $fillable = [
        'product_id', 'product_number',
    ];

    public static $rules = array(

    );

}
