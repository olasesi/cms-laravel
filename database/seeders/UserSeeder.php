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
        'role' => 'super admin',
        'active' => '1',
        'name' => 'olusesi eniola',
        'username' => 'eniola',
        'email' => 'olusesieniola@gmail.com',
        'password' => Hash::make('password'),
    ]
    
);

    }
}
