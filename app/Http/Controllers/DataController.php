<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SlideShow;
use App\ProductReviews;

class DataController extends BaseApiController
{
    /**
     * @SWG\Get(
     *     path="/data/get-slide-show",
     *     description="get slide show",
     *     tags={"Home page"},
     *     summary="get slide show",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getSlideShow(Request $request)
    {
        try {
            $dataSlideShow = SlideShow::getSlideShow();
            return $this->responseSuccess($dataSlideShow);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/data/get-product-category",
     *     description="get category",
     *     tags={"Home page"},
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
     *              @SWG\property(
     *                  property="sort",
     *                  type="integer",
     *                  description="0|1|2|3 = new|price: ascending|decrease",
     *              ),
     *              @SWG\property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="minPrice",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="maxPrice",
     *                  type="string",
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
            $dataProduct = Product::getProductByCategoryId($request->categoryId, 
            $request->page, $request->sort, $request->rating, $request->minPrice, $request->maxPrice);
            return $this->responseSuccess($dataProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/data/get-new-product",
     *     description="get new product",
     *     tags={"Home page"},
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

    /**
     * @SWG\Post(
     *     path="/data/get-product-detail",
     *     description="Get product detail by product id",
     *     tags={"Product detail"},
     *     summary="Get product detail by product id",
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get product detail by product id",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productId",
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
    public function getProductDetail(Request $request)
    {
        try {
            $validator = Product::validate($request->all(), 'Get_Product_Detail');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkProductId = Product::where([['product_id', $request->productId]])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $product = Product::getProductDetail($request->productId);
            return $this->responseSuccess($product);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/data/get-comment-product",
     *     description="Get comment by product id",
     *     tags={"Product detail"},
     *     summary="Get comment by product id",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get comment by product id",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productId",
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
    public function getCommentByProductId(Request $request)
    {
        try {
            $validator = ProductReviews::validate($request->all(), 'Get_Comment_By_ProductId');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $comment = ProductReviews::getCommentByProductId($request->productId, $request->page);
            return $this->responseSuccess($comment);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/data/get-related-products",
     *     description="Get related products by product id",
     *     tags={"Product detail"},
     *     summary="Get related products by product id",
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get related products by product id",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productId",
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
    public function getRelatedProducts(Request $request)
    {
        try {
            $validator = Product::validate($request->all(), 'Get_Related_Products');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkProductId = Product::where([['product_id', $request->productId]])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $product = Product::getRelatedProducts($request->productId, $checkProductId->cat_id);
            return $this->responseSuccess($product);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/data/search-product",
     *     description="Search product by name or tag",
     *     tags={"Search"},
     *     summary="Search product by name or tag",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Search product by name or tag",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="keyword",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="page",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="sort",
     *                  type="integer",
     *                  description="0|1|2|3 = new|price: ascending|decrease",
     *              ),
     *              @SWG\property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="minPrice",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="maxPrice",
     *                  type="string",
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
    public function searchProduct(Request $request)
    {
        try {
            $validator = Product::validate($request->all(), 'Search_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $data = Product::searchProduct($request->keyword, $request->page, $request->sort,
            $request->rating, $request->minPrice, $request->maxPrice);
            return $this->responseSuccess($data);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
