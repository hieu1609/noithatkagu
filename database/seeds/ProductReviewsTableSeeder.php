<?php

use Illuminate\Database\Seeder;
use App\ProductReviews;
use Carbon\Carbon;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'user_id' => 1,
                'product_id' => 1,
                'rating' => 5,
                'comment' => 'hang chat luong',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'product_id' => 1,
                'rating' => 4,
                'comment' => 'hang chat luong ok',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'rating' => 3,
                'comment' => 'tam duoc',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($reviews as $key => $review) {
            ProductReviews::create($review);
        }
    }
}
