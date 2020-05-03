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
        'Add_Number' => [
            'productId' => 'required|integer',
            'productNumber' => 'required|integer',
        ],
        'Delete_Product_Number' => [
        ],
        'Edit_Product_Number' => [
            'productNumber' => 'required|integer',
        ],
    );
    

}
