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
                'image' => '/assets/carousel/outdoor.webp',
                'title' => 'outdoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/furiture.webp',
                'title' => 'furiture',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'image' => '/assets/carousel/bedroom.webp',
                'title' => 'bedroom',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/indoor.webp',
                'title' => 'indoor',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => '/assets/carousel/livingroom.webp',
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
