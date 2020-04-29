<?php

use Illuminate\Database\Seeder;
use App\TransactionPaypal;
use Carbon\Carbon;

class OrderTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionPaypals = [
            [
                'order_id' => 1,
                'total_price' => 448.51,
                'currency' => 'USD',
                'paypal_id' => 'PAYID-L2UW75A37M55240HP303924K',
                'payer_id' => 'T23YSRTS5FWC2',
                'invoice_number' => '5ea96ff01a3e4',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        
        foreach ($transactionPaypals as $key => $transactionPaypal) {
            TransactionPaypal::create($transactionPaypal);
        }
    }
}
