<?php

use Illuminate\Database\Seeder;
use App\DiscountCode;
use Carbon\Carbon;

class DiscountCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expires_at = Carbon::now()->addDays(10);
        $discounts = [
            [
                'id' => 1,
                'code' => 'SUMMER5',
                'description' => 'Summer sales',
                'values' => '5',
                "expires_at"=> $expires_at->format('Y-m-d H:i:s'),
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'code' => 'SUMMER3',
                'description' => 'Summer sales',
                'values' => '3',
                "expires_at"=> $expires_at->format('Y-m-d H:i:s'),
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ]
        ];
        
        foreach ($discounts as $key => $discount) {
            DiscountCode::create($discount);
        }
    }
}
