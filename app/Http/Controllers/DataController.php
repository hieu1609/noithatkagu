<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SlideShow;

class DataController extends BaseApiController
{
    /**
     * @SWG\Get(
     *     path="/data/get-product-category",
     *     description="get category",
     *     tags={"Data"},
     *     summary="get category",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getProductCategory(Request $request)
    {
        try {
            $dataProductCategory = Category::getProductCategory();
            return $this->responseSuccess($dataProductCategory);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/data/get-product-by-category-id",
     *     description="Get product by category id",
     *     tags={"Data"},
     *     summary="Get product by category id",
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get product by category id",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="categoryId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="page",
     *                  type="integer",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getProductByCategoryId(Request $request)
    {
        try {
            $validator = Product::validate($request->all(), 'Get_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = Category::where([['cat_id', $request->categoryId]])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $dataProduct = Product::getProductByCategoryId($request->categoryId, $request->page);
            return $this->responseSuccess($dataProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/data/get-new-product",
     *     description="get new product",
     *     tags={"Data"},
     *     summary="get new product",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getNewProduct(Request $request)
    {
        try {
            $dataNewProduct = Product::getNewProduct();
            return $this->responseSuccess($dataNewProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
