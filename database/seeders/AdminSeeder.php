<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'firstname' => 'Ahmed',
            'lastname' => 'Olusesi',
            'username' => 'olasesi',
            'email' => 'olusesia@gmail.com',
            'password' => 'password'
        ]);
        
        
        Admin::create([
            'firstname' => 'Anita',
            'lastname' => 'Olusesi',
            'username' => 'anita',
            'email' => 'olusesianita@gmail.com',
            'password' => 'password'
        ]);


   Admin::create([
            'firstname' => 'Eniola',
            'lastname' => 'Olusesi',
            'username' => 'ennybaby',
            'email' => 'olusesieniola@gmail.com',
            'password' => 'password'
        ]);

    }
}
