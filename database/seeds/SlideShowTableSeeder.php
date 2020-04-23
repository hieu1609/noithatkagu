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
                'image' => 'https://i.ibb.co/d5FhQqw/gmdn2019.jpg',
                'title' => 'gmdn2019',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/fnBGVTN/camon.jpg',
                'title' => 'camon',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'image' => 'https://i.ibb.co/qm74xM4/tuyenthanhvien.jpg',
                'title' => 'tuyenthanhvien',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/K9ZT5r5/tramkyuc.jpg',
                'title' => 'tramkyuc',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/GWHmFbv/quengopsach.png',
                'title' => 'quyengopsach',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image' => 'https://i.ibb.co/fDHKPHM/cfs.jpg',
                'title' => 'cfs',
                "created_at"=> Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"=> Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];
        
        foreach ($slideShows as $key => $slideShow) {
            SlideShow::create($slideShow);
        }
    }
}
