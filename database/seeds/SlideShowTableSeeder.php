<?php

use Illuminate\Database\Seeder;
use App\SlideShow;
use Carbon\Carbon;

class SlideShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slideShows = [
            [
                'image' => 'https://i.ibb.co/2txhbHJ/outdoor.jpg',
                'title' => 'outdoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/vxcZN0p/furiture.png',
                'title' => 'furiture',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'image' => 'https://i.ibb.co/1K39fMW/bedroom.jpg',
                'title' => 'bedroom',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/BTXDNrp/indoor.jpg',
                'title' => 'indoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/LnFbB4L/livingroom.jpg',
                'title' => 'livingroom',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        
        foreach ($slideShows as $key => $slideShow) {
            SlideShow::create($slideShow);
        }
    }
}
