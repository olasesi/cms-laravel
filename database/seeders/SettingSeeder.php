<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'id' => 1,
           'name'=>'website name',
           'value'=>'News website',
           'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

