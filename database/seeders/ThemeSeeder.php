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
        DB::table('themes')->insert([
            'active' => '1',
            'primary_color' => '#d72924',
            'secondary_color' => '#4e65ff',
            'body_color' => '#f0f1f4',
            'light_color' => '#ffffff',
            'dark_color' => NULL,
            'created_at' => Carbon::now()
            
        ]);
    }
}
