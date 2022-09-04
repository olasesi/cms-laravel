<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([[
            'id' => 1,
           
            'title' => 'Lifestyle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 2,
           
            'title' => 'Technology',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 3,
           
            'title' => 'Video',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 4,
           
            'title' => 'Travel',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'id' => 5,
           
            'title' => 'Features',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],

        ]
        );
   
    
    }
}
