<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    protected $table = 'category';
    protected $fillable = [
        'cat_id', 'cat_name', 'cat_image',
    ];

    public static $rules = array(

    );

    public static function getProductCategory() {
        return Category::orderBy('cat_id')
        ->get();
    }
}
