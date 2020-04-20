<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Carbon\Carbon;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                "email"=> "admin@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "Admin",
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "email"=> "giahieua2ltv@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "giahieua2ltv",
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ]
        ];
        
        foreach ($admins as $key => $admin) {
            Admin::create($admin);
        }
    }
}
