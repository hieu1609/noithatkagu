<?php

use Illuminate\Database\Seeder;
use App\OrderUserInfor;
use Carbon\Carbon;

class OrderUserInforTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $orderUserInfors = [
            [
                'user_id' => 8,
                'name' => 'giahieua2',
                'phone' => '0868393039',
                'email' => 'giahieua2ltv@gmail.com',
                'address' => 'Hà Đông, Hà Nội',
                'total_price' => 10500000,
                'payment_method' => 'paypal',
                'paid' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Huấn Rose',
                'phone' => '0998998998',
                'email' => 'huanrose@gmail.com',
                'address' => 'Hà Nội',
                'total_price' => 14000000,
                'payment_method' => 'cash',
                'paid' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($orderUserInfors as $key => $orderUserInfor) {
            OrderUserInfor::create($orderUserInfor);
        }
    }
}
