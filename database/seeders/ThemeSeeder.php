<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([[
            'id' => '1',
            'theme_name' => 'Default',
            'active' => '1',
            'primary_color' => '#d72924',
            'secondary_color' => '#4e65ff',
            'body_color' => '#f0f1f4',
            'light_color' => '#ffffff',
            'dark_color' =>'#ffffff',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ],
        ['id' => '2',
        'theme_name' => 'Default2',
        'active' => '0',
        'primary_color' => '#d72924',
        'secondary_color' => '#4e65ff',
        'body_color' => '#f0f1f4',
        'light_color' => '#ffffff',
        'dark_color' =>'#ffffff',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    
        ]]);
    }
}
