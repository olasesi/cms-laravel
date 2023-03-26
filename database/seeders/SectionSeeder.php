<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([[
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
    
        ],
    
        [
        'id' => '4',
        'category' => 'Travel',
        'color' => '#005575',
        'rank' => null,
       'created_at' => Carbon::now(),
       'updated_at' => Carbon::now()
    
        ],

        
        [
            'id' => '5',
            'category' => 'Music',
            'color' => '#00a57c',
            'rank' => null,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        
            ],

        
        [
                'id' => '6',
                'category' => 'Sports',
                'color' => '#bba700',
                'rank' => null,
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
            
        ],

        
        [
            'id' => '7',
            'category' => 'Technology',
            'color' => '#c31f1f',
            'rank' => null,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        
            ],
[
            'id' => '8',
            'category' => 'Food',
            'color' => '#23c31f',
            'rank' => null,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        
            ],
    
    ]);
    }
}
