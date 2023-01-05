<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OpenWeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('open_weathers')->insert(
                [
                    'id' => '1',
                    'api_key' => 'Facebook',
                    'latitude' => '#',
                    'longitude' => '',
                    'language' => '', 
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
    
                ]
                );
    }
}
