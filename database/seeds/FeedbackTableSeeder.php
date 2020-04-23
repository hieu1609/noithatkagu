<?php

use Illuminate\Database\Seeder;
use App\Feedback;
use Carbon\Carbon;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [
            [
                'user_id' => 2,
                'title' => 'Sales',
                'content' => 'Sales',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'title' => 'Reply problem',
                'content' => 'OK I will fix it',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'user_id' => 3,
                'title' => 'Noithat Kagu store',
                'content' => 'thank you',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 4,
                'title' => 'Noithat Kagu store',
                'content' => 'Thank you',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 5,
                'title' => 'How to use it',
                'content' => 'I want buy love box',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'title' => 'Reply: How to use it',
                'content' => 'Once received, tap the link sent to you in the text message to open the Google Play Store on your device.',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        
        foreach ($feedbacks as $key => $feedback) {
            Feedback::create($feedback);
        }
    }
}
