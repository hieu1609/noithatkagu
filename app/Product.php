<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;
use App\ProductReviews;
use App\ProductNumber;

class Product extends BaseModel
{
    protected $primaryKey = 'product_id';
    protected $table = 'product';
    protected $fillable = [
        'product_id', 'product_name', 'product_price', 'material', 'size', 'color', 'infor', 'tag', 'cat_id', 'rating',
    ];

    public static $rules = array(
        'Get_Product' => [
            'categoryId' => 'required|integer',
            'page' => 'required|integer',
            'sort' => 'required|integer'
        ],
        'Get_Product_Detail' => [
            'productId' => 'required|integer',
        ],
        'Get_Related_Products' => [
            'productId' => 'required|integer',
        ],
        'Search_Product' => [
            'keyword' => 'required|string',
            'page' => 'required|integer',
            'sort' => 'required|integer'
        ],
        'Add_Product' => [
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productMaterial' => 'required|string',
            'productSize' => 'required|string',
            'productColor' => 'required|string',
            'infor' => 'required|string',
            'categoryId' => 'required|integer',
            'rating' => 'required|integer',
            'tag' => 'required|string',
        ],
        'Edit_Product' => [
            'productId' => 'required|string',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productMaterial' => 'required|string',
            'productSize' => 'required|string',
            'productColor' => 'required|string',
            'infor' => 'required|string',
            'categoryId' => 'required|integer',
            'rating' => 'required|integer',
            'tag' => 'required|string',
        ],
        'Delete_Product' => [
            'productId' => 'required|string',
        ],
        'Get_Product_Admin' => [
            'page' => 'required|integer'
        ],
    );

    public static function getProductByCategoryId($categoryId, $page, $sort) {
        //0|1|2|3 = id|new|price: ascending|decrease
        $orderBy1 = 'product_id';
        $orderBy2 = 'asc';
        switch ($sort) {
            case 1:
                $orderBy1 = 'product_id';
                $orderBy2 = 'desc';
                break;
            case 2:
                $orderBy1 = 'product_price';
                $orderBy2 = 'asc';
                break;
            case 3:
                $orderBy1 = 'product_price';
                $orderBy2 = 'desc';
                break;
            default:
                $orderBy1 = 'product_id';
                $orderBy2 = 'asc';
        }
        $limit = 6;
        $space = ($page - 1) * $limit;
        $data = Product::where('cat_id', $categoryId)
        ->orderBy($orderBy1, $orderBy2)
        ->limit($limit)
        ->offset($space)
        ->get();
        foreach ($data as $key => $value) {
            $data[$key]['image'] = ProductImage::where('product_image.product_id', $value['product_id'])->get();
            $data[$key]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $value['product_id'])->count();
        }
        return $data;
    }

    public static function getNewProduct() {
        $data = Product::limit(8)
        ->orderBy('product_id', 'desc')
        ->get();
        foreach ($data as $key => $value) {
            $data[$key]['image'] = ProductImage::where('product_image.product_id', $value['product_id'])->get();
            $data[$key]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $value['product_id'])->count();
        }
        return $data;
    }

    public static function searchProduct($keyword, $page, $sort) {
        //0|1|2|3 = id|new|price: ascending|decrease
        $orderBy1 = 'product_id';
        $orderBy2 = 'asc';
        switch ($sort) {
            case 1:
                $orderBy1 = 'product_id';
                $orderBy2 = 'desc';
                break;
            case 2:
                $orderBy1 = 'product_price';
                $orderBy2 = 'asc';
                break;
            case 3:
                $orderBy1 = 'product_price';
                $orderBy2 = 'desc';
                break;
            default:
                $orderBy1 = 'product_id';
                $orderBy2 = 'asc';
        }
        $limit = 6;
        $space = ($page - 1) * $limit;
        $data = Product::where('product_name', 'like', "%{$keyword}%")
        ->orWhere('tag', 'like', "%{$keyword}%")
        ->orderBy($orderBy1, $orderBy2)
        ->limit($limit)
        ->offset($space)
        ->get();
        
        foreach ($data as $key => $value) {
            $data[$key]['image'] = ProductImage::where('product_image.product_id', $value['product_id'])->get();
            $data[$key]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $value['product_id'])->count();
        }
        return $data;
    }

    public static function getProductDetail($productId) {
        $data = Product::where('product_id', $productId)
        ->get();
        $data[0]['image'] = ProductImage::where('product_image.product_id', $data[0]['product_id'])->get();
        $data[0]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $data[0]['product_id'])->count();
        $productNumber = ProductNumber::where('product_number.product_id', $data[0]['product_id'])->get('product_number');
        $data[0]['productNumber'] = $productNumber[0]['product_number'];
        return $data;
    }

    public static function getRelatedProducts($productId, $cat_id) {
        $data = Product::where([['cat_id', '=', $cat_id], ['product_id', '<>', $productId]])
        ->inRandomOrder()
        ->limit(4)
        ->get();
        foreach ($data as $key => $value) {
            $data[$key]['image'] = ProductImage::where('product_image.product_id', $value['product_id'])->get();
            $data[$key]['commentNumber'] = ProductReviews::where('product_reviews.product_id', $value['product_id'])->count();
        }
        return $data;
    }

    public static function getProductAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Product::limit($limit)
        ->offset($space)
        ->get();
    }
}
