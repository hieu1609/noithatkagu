<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(ProductReviewsTableSeeder::class);
        $this->call(ProductNumberTableSeeder::class);
        $this->call(SlideShowTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(FeedbackTableSeeder::class);
        $this->call(OrderUserInforTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(OrderTransactionTableSeeder::class);
        $this->call(TopProductsTableSeeder::class);
        $this->call(DiscountCodeTableSeeder::class);
    }
}
