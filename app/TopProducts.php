<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;
use App\ProductReviews;

class TopProducts extends BaseModel
{
    protected $table = 'top_products';
    protected $fillable = [
        'product_id', 'total_products',
    ];

    public static $rules = array(

    );

    public static function getBestSellingProducts() {
        $data = TopProducts::join('product', 'top_products.product_id', '=', 'product.product_id')
        ->orderBy('top_products.total_products', 'desc')
        ->limit(4)
        ->get();
        foreach ($data as $key => $value) {
            $data[$key]['priceFormat'] = number_format($value['product_price']);
            $data[$key]['fakePriceFormat'] = number_format($value['product_fk_price']);
            $data[$key]['pricePercent'] = round(($value['product_fk_price'] - $value['product_price'])/$value['product_fk_price']*100);
            $data[$key]['image'] = ProductImage::where('product_image.product_id', $value['product_id'])->get();
            $data[$key]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $value['product_id'])->count();
        }
        return $data;
    }
}
