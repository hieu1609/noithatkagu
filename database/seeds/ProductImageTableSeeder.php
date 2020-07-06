<?php

use Illuminate\Database\Seeder;
use App\ProductImage;
use Carbon\Carbon;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'product_id' => 1,
                'product_image' => '/assets/giuong/dongosoi/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => '/assets/giuong/dongosoi/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => '/assets/giuong/dongosoi/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => '/assets/giuong/giadinhgosoi/4.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => '/assets/giuong/giadinhgosoi/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => '/assets/giuong/giadinhgosoi/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 3,
                'product_image' => '/assets/giuong/giuongdoisoi/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => '/assets/giuong/giuongdoisoi/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => '/assets/giuong/giuongdoisoi/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 4,
                'product_image' => '/assets/giuong/don1keo/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => '/assets/giuong/don1keo/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => '/assets/giuong/don1keo/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 5,
                'product_image' => '/assets/giuong/don2keo/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => '/assets/giuong/don2keo/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => '/assets/giuong/don2keo/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 6,
                'product_image' => '/assets/giuong/go1nganhockeo/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => '/assets/giuong/go1nganhockeo/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => '/assets/giuong/go1nganhockeo/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 7,
                'product_image' => '/assets/giuong/go2nganhockeo/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => '/assets/giuong/go2nganhockeo/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => '/assets/giuong/go2nganhockeo/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 8,
                'product_image' => '/assets/giuong/giuong2tang/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => '/assets/giuong/giuong2tang/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => '/assets/giuong/giuong2tang/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 9,
                'product_image' => '/assets/giuong/tanggotunhien/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => '/assets/giuong/tanggotunhien/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => '/assets/giuong/tanggotunhien/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 10,
                'product_image' => '/assets/giuong/gomelamaine/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => '/assets/giuong/gomelamaine/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => '/assets/giuong/gomelamaine/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 11,
                'product_image' => '/assets/banghean/bobanangocaosu/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => '/assets/banghean/bobanangocaosu/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => '/assets/banghean/bobanangocaosu/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 12,
                'product_image' => '/assets/banghean/bobanan4ghe/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => '/assets/banghean/bobanan4ghe/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => '/assets/banghean/bobanan4ghe/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 13,
                'product_image' => '/assets/banghean/bobanantron/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => '/assets/banghean/bobanantron/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => '/assets/banghean/bobanantron/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 14,
                'product_image' => '/assets/banghean/bobananthongminh/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => '/assets/banghean/bobananthongminh/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => '/assets/banghean/bobananthongminh/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 15,
                'product_image' => '/assets/banghean/bobanantuatron/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => '/assets/banghean/bobanantuatron/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => '/assets/banghean/bobanantuatron/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],           
            [
                'product_id' => 16,
                'product_image' => '/assets/banghean/bobananchangosoi/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => '/assets/banghean/bobananchangosoi/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => '/assets/banghean/bobananchangosoi/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 17,
                'product_image' => '/assets/banghean/bobanan6ghemautunhien/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => '/assets/banghean/bobanan6ghemautunhien/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => '/assets/banghean/bobanan6ghemautunhien/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 18,
                'product_image' => '/assets/banghean/bobananmaytre/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => '/assets/banghean/bobananmaytre/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => '/assets/banghean/bobananmaytre/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 19,
                'product_image' => '/assets/banghean/bobanghehiendai/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => '/assets/banghean/bobanghehiendai/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => '/assets/banghean/bobanghehiendai/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 20,
                'product_image' => '/assets/banghean/bobanan6ghe/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => '/assets/banghean/bobanan6ghe/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => '/assets/banghean/bobanan6ghe/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => '/assets/sofa/sofagooccho/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => '/assets/sofa/sofagooccho/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => '/assets/sofa/sofagooccho/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => '/assets/sofa/sofagiuongtra/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => '/assets/sofa/sofagiuongtra/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => '/assets/sofa/sofagiuongtra/3.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => '/assets/sofa/sofagodo/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => '/assets/sofa/sofagodo/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => '/assets/sofa/sofagodo/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => '/assets/sofa/sofa5mon/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => '/assets/sofa/sofa5mon/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => '/assets/sofa/sofa5mon/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => '/assets/sofa/bosofaphongkhach/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => '/assets/sofa/bosofaphongkhach/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => '/assets/sofa/bosofaphongkhach/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => '/assets/sofa/sofagiuonggo/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => '/assets/sofa/sofagiuonggo/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => '/assets/sofa/sofagiuonggo/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => '/assets/sofa/sofagiuongngu/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => '/assets/sofa/sofagiuongngu/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => '/assets/sofa/sofagiuongngu/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => '/assets/sofa/bosofagotunhien/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => '/assets/sofa/bosofagotunhien/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => '/assets/sofa/bosofagotunhien/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => '/assets/sofa/sofagodanmay/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => '/assets/sofa/sofagodanmay/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => '/assets/sofa/sofagodanmay/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => '/assets/sofa/sofasoi/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => '/assets/sofa/sofasoi/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => '/assets/sofa/sofasoi/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => '/assets/tuquanao/tuaomfc/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => '/assets/tuquanao/tuaomfc/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => '/assets/tuquanao/tuaomfc/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => '/assets/tuquanao/tucanhlua/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => '/assets/tuquanao/tucanhlua/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => '/assets/tuquanao/tuluasoi/1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => '/assets/tuquanao/tuluasoi/2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => '/assets/tuquanao/tuluasoi/3.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => '/assets/tuquanao/tuquanaovango/1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => '/assets/tuquanao/tuquanaovango/2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => '/assets/tuquanao/tuquanaovango/3.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => '/assets/tuquanao/tuaothietkemdf/1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => '/assets/tuquanao/tuaothietkemdf/2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => '/assets/tuquanao/tuquanaogotunhien/1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => '/assets/tuquanao/tuquanaogotunhien/2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => '/assets/tuquanao/tuquanao2canh/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => '/assets/tuquanao/tuquanao2canh/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => '/assets/tuquanao/tuquanao2canh/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => '/assets/tuquanao/tuquanao3canh/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => '/assets/tuquanao/tuquanao3canh/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => '/assets/tuquanao/tuquanao3canh/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => '/assets/tuquanao/tuquanao4canh/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => '/assets/tuquanao/tuquanao4canh/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => '/assets/tuquanao/tuquanao4canh/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => '/assets/tuquanao/tugosoi/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => '/assets/tuquanao/tugosoi/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => '/assets/tuquanao/tugosoi/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => '/assets/ketivigiasach/ketivihiendai/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => '/assets/ketivigiasach/ketivihiendai/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => '/assets/ketivigiasach/ketivihiendai/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => '/assets/ketivigiasach/kegohinhcay/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => '/assets/ketivigiasach/kegohinhcay/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => '/assets/ketivigiasach/kegohinhcay/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => '/assets/ketivigiasach/banhockethopgiasach/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => '/assets/ketivigiasach/banhockethopgiasach/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => '/assets/ketivigiasach/banhockethopgiasach/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => '/assets/ketivigiasach/banhocgotunhien/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => '/assets/ketivigiasach/banhocgotunhien/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => '/assets/ketivigiasach/banhocgotunhien/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => '/assets/ketivigiasach/kesachbo8ke/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => '/assets/ketivigiasach/kesachbo8ke/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => '/assets/ketivigiasach/kesachbo8ke/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => '/assets/ketivigiasach/ketivimdf/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => '/assets/ketivigiasach/ketivimdf/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => '/assets/ketivigiasach/ketivimdf/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => '/assets/ketivigiasach/ketrangtrigo/4.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => '/assets/ketivigiasach/ketrangtrigo/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => '/assets/ketivigiasach/ketrangtrigo/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => '/assets/ketivigiasach/kegothong/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => '/assets/ketivigiasach/kegothong/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => '/assets/ketivigiasach/kegothong/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => '/assets/ketivigiasach/keruougo/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => '/assets/ketivigiasach/keruougo/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => '/assets/ketivigiasach/keruougo/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => '/assets/ketivigiasach/ketrangtri/1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => '/assets/ketivigiasach/ketrangtri/2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => '/assets/ketivigiasach/ketrangtri/3.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($images as $key => $image) {
            ProductImage::create($image);
        }
    }
}
