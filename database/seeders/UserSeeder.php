<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    DB::table('users')->insert([
        'role' => 'contributor',
        'active' => '0',
        'name' => 'anita olusesi',
        'username' => 'anita',
        'email' => 'olusesianita@gmail.com',
        'password' => Hash::make('password'),
    ]
);

    }
}
