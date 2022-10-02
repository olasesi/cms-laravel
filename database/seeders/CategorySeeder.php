<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_sections')->insert([[
            'id' => '1',
            'category' => 'Uncategorized',
            'color' => '#000000',
            'rank' => null,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '2',
            'category' => 'Health',
            'color' => '#6200ee',
            'rank' => null,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
        'id' => '3',
        'category' => 'Fashion',
        'color' => '#ff5575',
        'rank' => null,
       'created_at' => Carbon::now(),
       'updated_at' => Carbon::now()
    
        ]]);
    }
}
