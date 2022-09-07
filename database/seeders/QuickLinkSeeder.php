<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class QuickLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quick_links')->insert([[
            'id' => '1',
            'link_title' => 'Support',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '2',
            'link_title' => 'Suggestion',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '3',
            'link_title' => 'Privacy',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '4',
            'link_title' => 'About',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '5',
            'link_title' => 'Our ads',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '6',
            'link_title' => 'Terms',
            'url' => '#',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
    ]);
    }
}
