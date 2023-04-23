<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_info')->insert([[
            'id' => 1,
           'name'=>'website name',
           'value'=>'News',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 2,
           'name'=>'logo',
           'value'=>'/images/logo/logo.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 3,
           'name'=>'fav logo',
           'value'=>'/images/logo/fav.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 4,
           'name'=>'mini logo',
           'value'=>'/images/logo/mini_logo.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 5,
           'name'=>'meta description',
           'value'=>'Get the latest news and updates as they break',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
    
    ]);
    }
}
