<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([[
            'id' => '1',
            'name' => 'Super admin',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
            'id' => '2',
            'name' => 'Editor',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()

            
        ],
        [
        'id' => '3',
        'name' => 'Author',
       'created_at' => Carbon::now(),
       'updated_at' => Carbon::now()
    
        ],
    
        [
        'id' => '4',
        'name' => 'Contributor',
       'created_at' => Carbon::now(),
       'updated_at' => Carbon::now()
    
        ],

        
        [
            'id' => '5',
            'name' => 'Subscriber',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        
            ],

    ]);
    }
}