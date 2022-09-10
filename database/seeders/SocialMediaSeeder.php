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
            'id' => '1',
            'name' => 'Facebook',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '2',
            'name' => 'Twitter',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '3',
            'name' => 'Google Plus',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '4',
            'name' => 'Instagram',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '5',
            'name' => 'YouTube',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '6',
            'name' => 'LinkedIn',
            'url' => '#',
            'updated_at'=> Carbon::now(),
            'created_at' => Carbon::now()
            
        ],
    ]);
      
    }
}
