<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SocialLikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_likes')->insert([
            [
                'id' => '1',
                'name' => 'Facebook',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'id' => '2',
                'name' => 'Google plus',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'id' => '3',
                'name' => 'Twitter',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'id' => '4',
                'name' => 'Pinterest',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'id' => '5',
                'name' => 'Instagram',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'id' => '6',
                'name' => 'Youtube',
                'code' => '#',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
        ]);
    }
}
