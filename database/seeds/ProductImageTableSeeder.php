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
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdongosoi/giuongdongosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdongosoi/giuongdongosoi1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 1,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdongosoi/giuongdongosoi2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggiadinhgosoi/giuonggiadinhgosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggiadinhgosoi/giuonggiadinhgosoi.jpg2',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggiadinhgosoi/giuonggiadinhgosoi.jpg3',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 3,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdoigosoi/giuongdoigosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdoigosoi/giuongdoigosoi1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongdoigosoi/giuongdoigosoi2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 4,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giươngngugodon1hockeo/giuongdon1hoc.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giươngngugodon1hockeo/giuongdon1hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 4,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giươngngugodon1hockeo/giuongdon1hoc2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 5,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggodon2nganhockeo/giuongdon2hoc.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggodon2nganhockeo/giuongdon2hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 5,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggodon2nganhockeo/giuongdon2hoc2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 6,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo1nganhockeo/giuonggo1ngan.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo1nganhockeo/giuonggo1ngan1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 6,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo1nganhockeo/giuonggo1ngan2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 7,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo2nganhockeo/giuong2hoc.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo2nganhockeo/giuong2hoc1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 7,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuonggo2nganhockeo/giuong2hoc2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 8,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongngu2tanggothong/giuongtanggothong.jpgg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongngu2tanggothong/giuongtanggothong1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 8,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongngu2tanggothong/giuongtanggothong2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 9,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongtanggotunhien/giuongtanggotunhien.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongtanggotunhien/giuongtanggotunhien1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 9,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/giuongtanggotunhien/giuongtanggotunhien2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 10,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/guongngumelamine/guongngumelamine.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/guongngumelamine/guongmelamain1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 10,
                'product_image' => 'http://noithatkagu.store/public/image/giuong/guongngumelamine/giuongmelamain2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 11,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanangocaosu/banghegocaosu.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanangocaosu/banghegocaosu1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 11,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanangocaosu/banghegocaosu2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 12,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan4ghe/Banan4ghe.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan4ghe/bobanan4ghe2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 12,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan4ghe/bobanan4ghe1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            [
                'product_id' => 13,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantron/bobanantron.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantron/bobanantron1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 13,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantron/bobanantron2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 14,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananthongminh/bobananthongminh.jpeg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananthongminh/bobananthongminh1.jpeg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 14,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananthongminh/bobananthongminh2.PNG',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 15,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantuatron/bananghetuatron.jpeg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantuatron/bobanantuatron1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 15,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanantuatron/bobanantuatron2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],           
            [
                'product_id' => 16,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanachangosoi/bobanachangosoi.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanachangosoi/changosoi1.jpeg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 16,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanachangosoi/changosoi2.jpeg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 17,
                /////////////////////////////////////////////////////////////
                /////////////////////////////// File Anh Tieng Viet
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghemautunhien/bộbanan6gmautunhien.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghemautunhien/bo6ghemautunhien1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 17,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghemautunhien/bo6ghemautunhien2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 18,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananmaytre/bobananmaytre.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananmaytre/bobananmaytre1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 18,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobananmaytre/bobananmaytre2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 19,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanghehiendai/banghehiendai.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanghehiendai/banghehiendai1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 19,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanghehiendai/banghehiendai2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'product_id' => 20,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghe/banan6ghe.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghe/banan6ghe1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 20,
                'product_image' => 'http://noithatkagu.store/public/image/banghean/bobanan6ghe/bobanan6ghe2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagooccho/sofagooccho.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagooccho/sofagooccho1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 21,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagooccho/sofagooccho2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuongkethopbantra/sofakethopbantra.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuongkethopbantra/sofakethopbantra1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 22,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuongkethopbantra/sofakethopbantra2.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodo/sofagodo.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodo/sofagodo1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 23,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodo/sofagodo2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofa5mon/sofa5mon.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofa5mon/sofa5mon1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 24,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofa5mon/sofa5mon2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofaphongkhach/sofagiaddinh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofaphongkhach/sofagiaddinh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 25,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofaphongkhach/sofagiaddinh2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggo/sofaguonggo.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggo/sofaguonggo1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 26,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggo/sofaguonggo2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggokagu/sofakethopguong.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggokagu/sofakethopguong1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 27,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagiuonggokagu/sofakethopguong2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofagotunhien/bosofa.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofagotunhien/sofagotunhien1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 28,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/bosofagotunhien/sofagotunhien2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodanmay/sofadanmay.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodanmay/sofadanmay1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 29,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagodanmay/sofadanmay2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagosoi/sofagosoi.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagosoi/sofagosoi1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 30,
                'product_image' => 'http://noithatkagu.store/public/image/sofa/sofagosoi/sofagosoi2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaoMFC/tuMFC.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaoMFC/tumfc1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 31,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaoMFC/tumfc2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tucanhlua/tulua.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 32,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tucanhlua/tulua1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tucanhluagosoi/tucanhluagosoi.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tucanhluagosoi/tucanhluagosoi1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 33,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tucanhluagosoi/tucanhluagosoi2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaovango/tuvango.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaovango/tuvango1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 34,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaovango/tuvango2.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuaothietkeMDF/tumelamine.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 35,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuaothietkeMDF/tumelamine1.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaogotunhien/tuquanaogotunhien.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 36,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanaogotunhien/tuquanaogotunhien1.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao2canh/tuquanao2canh.png',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao2canh/tuquanao2canh1.png',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 37,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao2canh/tuquanao2canh2.png',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao3canh/tuquanao3canh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao3canh/tuquanao3canh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 38,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao3canh/tuquanao3canh2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao4canh/tuquanao4canh.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao4canh/tuquanao4canh1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 39,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tuquanao4canh/tuquanao4canh2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tugosoi/togosoi.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tugosoi/tugosoi1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 40,
                'product_image' => 'http://noithatkagu.store/public/image/tuquanao/tugosoi/tugosoi2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketivihiendai/ketivihiendai.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketivihiendai/ketivihiendai1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 41,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketivihiendai/ketivihiendai2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegohinhcay/ketrangtri.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegohinhcay/kehinhcay1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 42,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegohinhcay/kehinhcay2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhockethopgiasach/banhockethopgiasach.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhockethopgiasach/bangiasach1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 43,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhockethopgiasach/bangiasach2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhocgotunhien/banhockesachgotunhien.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhocgotunhien/banhocgotunhien1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 44,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/banhocgotunhien/banhocgotunhien2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kesachbo8ke/kesachbo8ke.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kesachbo8ke/bo8ke1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 45,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kesachbo8ke/bo8ke2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketiviMDF/ketiviMDF.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketiviMDF/ketiviMDF1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 46,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketiviMDF/ketiviMDF2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtrigo/kegotrangtri.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtrigo/kegotrangtri1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 47,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtrigo/kegotrangtri2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegothong/kegothong.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegothong/kegothong1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 48,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/kegothong/kegothong2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/keruougo/keruougo.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/keruougo/keruougo1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 49,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/keruougo/keruougo2.jpg',
                'image_description' => 'mat sau 1',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtri/ketrangtri.jpg',
                'image_description' => 'mat truoc 2',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtri/ketrangtri1.jpg',
                'image_description' => 'mat truoc fa-rotate-180',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 50,
                'product_image' => 'http://noithatkagu.store/public/image/ketivigiasach/ketrangtri/ketrangtri2.jpg',
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
