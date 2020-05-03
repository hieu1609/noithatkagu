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

    public static function getBestSellingProducts() {
        return TopProducts::orderBy('total_products', 'desc')
        ->limit(4)
        ->get();
    }
}
