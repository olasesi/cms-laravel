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
            'content_type'=>'#',
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
            'content_type'=>'#',
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


        [
            'id' => 6,
           
            'title' => 'Recent category',
            'content_type'=>'Recent',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 7,
           
            'title' => 'Breaking news category',
            'content_type'=>'Breaking news',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 8,
           
            'title' => 'Most popular category',
            'content_type'=>'Most popular',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 9,
           
            'title' => 'Favourite category',
            'content_type'=>'Favourite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 10,
           
            'title' => 'Hot topics category',
            'content_type'=>'Hot topics',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 11,
           
            'title' => 'Watch now category',
            'content_type'=>'Watch now',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 12,
           
            'title' => 'Trending category',
            'content_type'=>'Trending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ],
        [
            'id' => 13,
           
            'title' => 'More news category',
            'content_type'=>'More news',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           
        ]

        ]
        );
   
    
    }
}
