<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_medias')->insert([[
            
            'name' => 'Facebook',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            
            'name' => 'Twitter',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            
            'name' => 'Google Plus',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            
            'name' => 'Instagram',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            
            'name' => 'YouTube',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            
            'name' => 'LinkedIn',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
    ]);
      
    }
}
