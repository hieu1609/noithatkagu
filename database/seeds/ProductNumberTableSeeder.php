<?php

use Illuminate\Database\Seeder;
use App\ProductNumber;
use Carbon\Carbon;

class ProductNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numbers = [
            [
                'product_id' => 1,
                'product_number' => 15,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 2,
                'product_number' => 20,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'product_id' => 3,
                'product_number' => 20,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'product_id' => 4,
                'product_number' => 20,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'product_id' => 5,
                'product_number' => 20,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],


        ];
        
        foreach ($numbers as $key => $number) {
            ProductNumber::create($number);
        }
    }
}
