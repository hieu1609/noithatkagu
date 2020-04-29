<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopProducts extends BaseModel
{
    protected $table = 'top_products';
    protected $fillable = [
        'product_id', 'total_products',
    ];

    public static $rules = array(

    );
}
