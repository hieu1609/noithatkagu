<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;
use Carbon\Carbon;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetails = [
            [
                'order_id' => 1,
                'product_id' => 16,
                'product_name' => 'Bộ bàn ăn chân gỗ sồi',
                'product_price' => 5000000,
                'quantity' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'product_name' => 'Giường gia đình gỗ sồi',
                'product_price' => 5500000,
                'quantity' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_id' => 2,
                'product_id' => 17,
                'product_name' => 'Bộ bàn ăn 6 ghế màu tự nhiên',
                'product_price' => 7000000,
                'quantity' => 2,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($orderDetails as $key => $orderDetail) {
            OrderDetail::create($orderDetail);
        }
    }
}
