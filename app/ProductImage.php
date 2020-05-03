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
        'Add_Image' => [
            'productId' => 'required|integer',
            'productImage' => 'required|string',
            'imageDescription' => 'required|string'
        ],
        'Edit_Product_Image' => [
            'productId' => 'required|integer',
            'productImage' => 'required|string',
            'imageDescription' => 'required|string'
        ],
        'Delete_Product_Image' => [
            'productImageId' => 'required|integer'
        ],
    );

}
