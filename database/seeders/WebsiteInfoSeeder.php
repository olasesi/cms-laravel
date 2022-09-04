<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_info')->insert([
            'id' => 1,
           'website_name'=>'Website name',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
