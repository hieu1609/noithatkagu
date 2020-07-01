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
                'delivery_option' => 'GHN Express',
                'discount' => null,
                'first_price' => 10500000,
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
                'delivery_option' => 'Viettel Post',
                'discount' => "summer5",
                'first_price' => 14000000,
                'total_price' => 13300000,
                'payment_method' => 'cash',
                'paid' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 3,
                'name' => 'Quân',
                'phone' => '0399295198',
                'email' => 'quan@gmail.com',
                'address' => 'Buôn Hô, Đắk Lắk',
                'delivery_option' => 'VietNam Post',
                'discount' => null,
                'first_price' => 8000000,
                'total_price' => 8000000,
                'payment_method' => 'cash',
                'paid' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'name' => 'Đức',
                'phone' => '0942013068',
                'email' => 'duc@gmail.com',
                'address' => 'Buôn Hô, Đắk Lắk',
                'delivery_option' => 'VietNam Post',
                'discount' => null,
                'first_price' => 14000000,
                'total_price' => 14000000,
                'payment_method' => 'paypal',
                'paid' => 0,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($orderUserInfors as $key => $orderUserInfor) {
            OrderUserInfor::create($orderUserInfor);
        }
    }
}
