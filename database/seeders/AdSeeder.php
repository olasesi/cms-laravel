<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([[
            'id' => '1',
            'banner_name' => 'Banner 1',
            'image' => 'banner1.jpg',
            'image_path' => 'images/ads/banner1.jpg',
            'image_url' => '#',
            'end_date' => '2300-10-31',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
    
        [
            'id' => '2',
            'banner_name' => 'Banner 2',
            'image' => 'banner2.jpg',
            'image_path' => 'images/ads/banner2.jpg',
            'image_url' => '#',
            'end_date' => '2300-10-31',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ],
        [
            'id' => '3',
            'banner_name' => 'Banner 3',
            'image' => 'banner3.jpg',
            'image_path' => 'images/ads/banner3.jpg',
            'image_url' => '#',
            'end_date' => '2300-10-31',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ],
        [
            'id' => '4',
            'banner_name' => 'Banner 4',
            'image' => 'banner4.jpg',
            'image_path' => 'images/ads/banner4.jpg',
            'image_url' => '#',
            'end_date' => '2300-10-31',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]
    ]);

       


    }
}
