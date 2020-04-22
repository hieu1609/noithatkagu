<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends BaseModel
{
    protected $table = 'product_image';
    protected $fillable = [
        'product_id', 'product_image', 'image_description',
    ];

    public static $rules = array(

    );

}
