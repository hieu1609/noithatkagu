<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'cat_name' => 'Giường',
                'cat_image' => 'https://i.ibb.co/r595Pbr/bed.png',
                'cat_image_description' => 'bed',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'cat_name' => 'Bàn ghế',
                'cat_image' => 'https://i.ibb.co/QPW4ZFD/table-and-chair.png',
                'cat_image_description' => 'tables and chairs',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'cat_name' => 'Sofa',
                'cat_image' => 'https://i.ibb.co/zWdDN1P/sofa.png',
                'cat_image_description' => 'sofa',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'cat_name' => 'Tủ quần áo',
                'cat_image' => 'https://i.ibb.co/pybsQbJ/t-1.png',
                'cat_image_description' => 'wardrobe',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'cat_name' => 'Kệ',
                'cat_image' => 'https://i.ibb.co/q5XyB0n/k.png',
                'cat_image_description' => 'shelf',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($categories as $key => $category) {
            Category::create($category);
        }
    }
}
