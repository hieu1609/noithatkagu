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
                'product_image' => 'https://i.ibb.co/3CTn9H8/gi-ng-ng-i.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => 'https://i.ibb.co/vYRFz88/giuongdongosoi1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => 'https://i.ibb.co/xLqkQbN/giuongdongosoi2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'https://i.ibb.co/GTgkc2t/gi-ng-gia-nh-g-s-i.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'https://i.ibb.co/qdZk8xm/giuonggiadinhgosoi1.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'https://i.ibb.co/Qm7pxbp/giuonggiadinhgosoi.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 3,
                'product_image' => 'https://i.ibb.co/R2vTGYp/g-ngngugosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => 'https://i.ibb.co/KWhDpQD/giuongdoigosoi1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => 'https://i.ibb.co/w6VC57r/giuongdoigosoi2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 4,
                'product_image' => 'https://i.ibb.co/LP3vZMP/giuongf-n-1-ng-n-h-c-k-o.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => 'https://i.ibb.co/tscbC4c/giuongdon1hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => 'https://i.ibb.co/k6FK8BK/giuongdon1hoc2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 5,
                'product_image' => 'https://i.ibb.co/zQ7RYMv/gi-ng-ng-h-c-k-o.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => 'https://i.ibb.co/fNdRsrX/guongdon2hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => 'https://i.ibb.co/TrX9mFY/giuongdon2hoc2.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 6,
                'product_image' => 'https://i.ibb.co/mtTmk83/giuongnguhockeo-',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => 'https://i.ibb.co/mHTBXfq/giuonggo1ngan1.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => 'https://i.ibb.co/KxBSBff/giuonggo1ngan2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 7,
                'product_image' => 'https://i.ibb.co/WNCmjVD/giuong-n2hockeo.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => 'https://i.ibb.co/DzHyxSt/giuong2hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => 'https://i.ibb.co/dPcwSN1/guong2hoc2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 8,
                'product_image' => 'https://i.ibb.co/4Wc4g0v/giuonggotang.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => 'https://i.ibb.co/yS93tQD/giuongtanggothong1.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => 'https://i.ibb.co/Q6yxhkr/giuongtanggothong2.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 9,
                'product_image' => 'https://i.ibb.co/SNJrMKZ/gi-ng-t-ng-g-t-nhi-n.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => 'https://i.ibb.co/r2PDhcJ/giuongtanggotunhien.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => 'https://i.ibb.co/t39YXtz/giuongtanggotunhien2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 10,
                'product_image' => 'https://i.ibb.co/qM22mn4/guongngumelamine.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => 'https://i.ibb.co/6DBG2BX/guongmelamain1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => 'https://i.ibb.co/q5X3bVR/giuongmelamain2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 11,
                'product_image' => 'https://i.ibb.co/dt59z3w/b-n-gh-n-g-cao-su.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => 'https://i.ibb.co/RQVBGT0/banghegocaosu1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => 'https://i.ibb.co/wMX3HP4/banghegocaosu2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 12,
                'product_image' => 'https://i.ibb.co/tPSWfnk/Banan4ghe.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => 'https://i.ibb.co/MN7Tcwc/bobanan4ghe2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => 'https://i.ibb.co/cTcY8B9/bobanan4ghe1.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 13,
                'product_image' => 'https://i.ibb.co/Dt0DyTB/bobanantron.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => 'https://i.ibb.co/pwSFF8B/bobanantron1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => 'https://i.ibb.co/m5vjs0t/bobanantron2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 14,
                'product_image' => 'https://i.ibb.co/QFb1MzV/bobananthongminh.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => 'https://i.ibb.co/S73949x/bobananthongminh1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => 'https://i.ibb.co/58xFd39/bobananthongminh2.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 15,
                'product_image' => 'https://i.ibb.co/QcdwTF7/b-bananghetuatron.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => 'https://i.ibb.co/vYDPD2T/bobanantuatron1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => 'https://i.ibb.co/g4s8NgG/bobanantuatron2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 16,
                'product_image' => 'https://i.ibb.co/rvY933s/b-banachangosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => 'https://i.ibb.co/VpCWQxK/changosoi1.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => 'https://i.ibb.co/prkCbB2/changosoi2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 17,
                'product_image' => 'https://i.ibb.co/7gSChHJ/b-banan6gmautunhien.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => 'https://i.ibb.co/khfW7zh/bo6ghemautunhien1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => 'https://i.ibb.co/ncc7KZd/bo6ghemautunhien2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 18,
                'product_image' => 'https://i.ibb.co/HnBLZVs/bobananmaytre.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => 'https://i.ibb.co/9Hs0kqT/bobananmaytre1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => 'https://i.ibb.co/8MDw4d5/bobananmaytre2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 19,
                'product_image' => 'https://i.ibb.co/TMfg6Cf/banghehiendai.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => 'https://i.ibb.co/1vSWZ3b/banghehiendai1.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => 'https://i.ibb.co/cC6tZtw/banghehiendai2.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 20,
                'product_image' => 'https://i.ibb.co/JCdSVQr/banan6ghe.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => 'https://i.ibb.co/pbKNWHZ/banan6ghe1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => 'https://i.ibb.co/n6sJjPg/bobanan6ghe2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'https://i.ibb.co/bznjrvg/sofag-occho.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'https://i.ibb.co/yXRDZpB/sofag-occho1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'https://i.ibb.co/LhwWy2R/sofag-occho2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'https://i.ibb.co/vwBq2PQ/sofa-gi-ng-k-t-h-p-b-n-tr.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'https://i.ibb.co/q9RRXC4/sofa-gi-ng-k-t-h-p-b-n-tr-1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'https://i.ibb.co/19LyBSH/sofa-gi-ng-k-t-h-p-b-n-tr-2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'https://i.ibb.co/HGYqsck/sofa-go-do.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'https://i.ibb.co/JKNJPfH/sofa-go-do1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'https://i.ibb.co/XypX1N9/sofa-go-do2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'https://i.ibb.co/7NMJw4H/Bo-safa-5-m-n600x600.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'https://i.ibb.co/7gWSf15/Bo-safa-5mon1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'https://i.ibb.co/T1Hvfz1/sofa5mon2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'https://i.ibb.co/wrMP9x0/sofagiaddinh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'https://i.ibb.co/t26vn5H/sofagiaddinh1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'https://i.ibb.co/Hgb8wjT/sofagiaddinh2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'https://i.ibb.co/FzLLC0V/sofaguonggo.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'https://i.ibb.co/cNk6fD6/sofaguonggo1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'https://i.ibb.co/47BHn8D/sofaguonggo2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'https://i.ibb.co/d0LSHRB/sofakethopguong.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'https://i.ibb.co/K0xVcS3/sofakethopguong1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'https://i.ibb.co/28Nzzgd/sofakethopguong2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'https://i.ibb.co/C1KkdNs/bosofa.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'https://i.ibb.co/2P5Hfv4/sofagotunhien1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'https://i.ibb.co/dgNMGFW/sofagotunhien2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'https://i.ibb.co/yhr2PQc/sofs-g-dan-m-y.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'https://i.ibb.co/cgrKrv0/sofadanmay1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'https://i.ibb.co/hY8jSYW/sofadanmay2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'https://i.ibb.co/wS5KD6m/sofagosoi.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'https://i.ibb.co/9VcRm6K/sofagosoi1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'https://i.ibb.co/z7YR1X4/sofagosoi2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'https://i.ibb.co/tHjCQ12/tuMFC.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'https://i.ibb.co/2Z1BTpf/tumfc1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'https://i.ibb.co/fNvnZn6/tumfc2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => 'https://i.ibb.co/Jq4qQSH/t-lua.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => 'https://i.ibb.co/Z83YsB2/tulua1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'https://i.ibb.co/txsCFrR/tucanhluagosoi.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'https://i.ibb.co/6ncHsw4/tucanhluagosoi1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'https://i.ibb.co/kQ7SFkm/tucanhluagosoi2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'https://i.ibb.co/56wbV4z/t-quanaovango.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'https://i.ibb.co/5BKMRVj/tuvango1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'https://i.ibb.co/wwHrhNQ/tuvango2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => 'https://i.ibb.co/PYTtN6F/t-quanaosmelamine.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => 'https://i.ibb.co/2d7WLfq/tumelamine1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => 'https://i.ibb.co/0Qgbjwh/tuquanaogotunhien.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => 'https://i.ibb.co/RYQJsSv/tuquanaogotunhien1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'https://i.ibb.co/rFk0Js8/tuquanao2canh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'https://i.ibb.co/j3N5jPG/tuquanao2canh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'https://i.ibb.co/Bnq3xbj/tuquanao2canh2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'https://i.ibb.co/1sMsCtr/tuquanao3canh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'https://i.ibb.co/58XKhpf/tuquanao3canh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'https://i.ibb.co/dJtDDcz/tuquanao3canh2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'https://i.ibb.co/grbYc9J/tuquanao4canh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'https://i.ibb.co/TcfnbhT/tuquanao4canh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'https://i.ibb.co/5TJbvPW/tuquanao4canh2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'https://i.ibb.co/tsy4xDH/togosoi.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'https://i.ibb.co/4M8VKY8/tugosoi1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'https://i.ibb.co/HTQbjYJ/tugosoi2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'https://i.ibb.co/n8Lg7PH/ke-TIVI-phong-khach-hien-dai-KTV68005.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'https://i.ibb.co/F7K4Dk7/ketivihiendai1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'https://i.ibb.co/6PjJL2W/ketivihiendai2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'https://i.ibb.co/RBWmcJ1/k-trang-tr.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'https://i.ibb.co/Hq64d3x/kehinhcay1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'https://i.ibb.co/whLCHPH/kehinhcay2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'https://i.ibb.co/Y7BKy3p/banhockethopgiasach.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'https://i.ibb.co/92GHxk8/bangiasach1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'https://i.ibb.co/KzDsmB9/bangiasach2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'https://i.ibb.co/98zTFcN/b-nhockesachgotunhien.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'https://i.ibb.co/SRjz5QH/banhocgotunhien1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'https://i.ibb.co/THgjcJV/banhocgotunhien2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'https://i.ibb.co/0Xb0Bjr/kesachbo8ke.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'https://i.ibb.co/X7Hv2W6/bo8ke1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'https://i.ibb.co/Wys1ncn/bo8ke2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'https://i.ibb.co/zNgpd8K/ketivi-MDF.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'https://i.ibb.co/r4wXrrk/ketivi-MDF1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'https://i.ibb.co/7KqQb67/ketivi-MDF2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'https://i.ibb.co/rFFHXzF/kegotrangtri.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'https://i.ibb.co/9ZQ8QQ9/kegotrangtri1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'https://i.ibb.co/gdVmwhK/kegotrangtri2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'https://i.ibb.co/tYVq5Vn/kegothong.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'https://i.ibb.co/HnwG28x/kegothong1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'https://i.ibb.co/JFJDrw8/kegothong2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'https://i.ibb.co/NTq5bXk/keruougo.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'https://i.ibb.co/WkQ23qq/keruougo1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'https://i.ibb.co/VwJ1Rgr/keruougo2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'https://i.ibb.co/HhKG3HS/k-r-u.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'https://i.ibb.co/PGYpySS/ketrangtri1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'https://i.ibb.co/GHC26b2/ketrangtri2.jpg',
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
