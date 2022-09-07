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
            'content_type'=>'Post',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 2,
           
            'title' => 'Technology',
            'content_type'=>'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 3,
           
            'title' => 'Video',
            'content_type'=>'Video',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 4,
           
            'title' => 'Travel',
            'content_type'=>'https://facebook.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ],
        [
            'id' => 5,
           
            'title' => 'Features',
            'content_type'=>'Category',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],

        ]
        );
   
    
    }
}
