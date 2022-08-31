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
            'image' => NULL,
            'image_path' => '#',
            'created_at' => Carbon::now()
            
        ],
    
        [
            'id' => '2',
            'banner_name' => 'Banner 2',
            'image' => NULL,
            'image_path' => '#',
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '3',
            'banner_name' => 'Banner 3',
            'image' => NULL,
            'image_path' => '#',
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '4',
            'banner_name' => 'Banner 4',
            'image' => NULL,
            'image_path' => '#',
            'created_at' => Carbon::now()
            
        ]
    ]);

       


    }
}
