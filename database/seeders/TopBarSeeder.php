<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TopBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('top_bar_links')->insert([[
            'id' => '1',
            'title' => 'Blog',
            'url' => '#',
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '2',
            'title' => 'Forums',
            'url' => '#',
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '3',
            'title' => 'Contact',
            'url' => '#',
            'created_at' => Carbon::now()
            
        ],
        [
            'id' => '4',
            'title' => 'Advertisement',
            'url' => '#',
            'created_at' => Carbon::now()
            
        ]
        ]
    );

  
    }
}
