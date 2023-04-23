<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([[
        'id' => 1,
        'email' => 'olusesia@gmail.com',
        'name'=> 'Ahmed',
        'comment' => 'This is cool',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
        ],
        [
        'id' => 2,
        'email' => 'ola.sesi@yahoo.com',
        'name'=> 'anita',
        'comment' => 'This is the second comment',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
        ]]);
    }
}
