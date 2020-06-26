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
                'image' => '/assets/carousel/outdoor.jpg',
                'title' => 'outdoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/furiture.png',
                'title' => 'furiture',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'image' => '/assets/carousel/bedroom.jpg',
                'title' => 'bedroom',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/indoor.jpg',
                'title' => 'indoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/livingroom.jpg',
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
