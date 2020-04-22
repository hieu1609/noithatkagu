<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "email"=> "admin@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "Admin",
                'phone' => '0123123123',
                'address' => 'Trường ĐH CNTT, Thủ Đức, Thành phố HCM',
                'admin' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email"=> "duc@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "Đức",
                'phone' => '0942013068',
                'address' => 'Buôn Hô, Đắk Lắk',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email"=> "quan@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "Quân",
                'phone' => '0399295198',
                'address' => 'Buôn Hô, Đắk Lắk',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                "email" => "hieu@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Hiếu",
                'phone' => '0982538168',
                'address' => 'Biên Hòa, Đồng Nai',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email" => "linh@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Linh",
                'phone' => '0363425679',
                'address' => 'Long Thành, Đồng Nai',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email" => "levy@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Vy",
                'phone' => '0353659895',
                'address' => 'Lý Hòa, Bình Trị Thiên, Quảng Bình',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email" => "string@gmail.com",
                'password' => bcrypt('string'),
                "name" => "String",
                'phone' => '0953232326',
                'address' => 'Hà Đông, Hà Nội',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email" => "giahieua2ltv@gmail.com",
                'password' => bcrypt('string'),
                "name" => "giahieua2",
                'phone' => '0868393039',
                'address' => 'Hà Đông, Hà Nội',
                'admin' => 1,
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
