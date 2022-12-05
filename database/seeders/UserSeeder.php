<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    DB::table('users')->insert([[
        'id'=> 1,
        'role' => 'super admin',
        'active' => '1',
        'name' => 'olusesi ahmed',
        'username' => 'ola.sesi',
        'email' => 'olusesia@gmail.com',
        'password' => Hash::make('password'),
        'facebook' => 'https://facebook.com/olasesi',
        'twitter' => 'https://twitter.com/olasesi',
        'google_plus' => '',
        'linkedin' => '',
        'bio' => '',
        'user_image' => 'user1.jpg',
        'user_image_path' => 'images/users/user1.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'id'=> 2,
        'role' => 'editor',
        'active' => '1',
        'name' => 'Wale Mutiat',
        'username' => 'waleat',
        'email' => 'titi75@okonkwo.gov.ng',
        'password' => Hash::make('password'),
        'facebook' => 'https://facebook.com/waleat',
        'twitter' => 'https://twitter.com/waleat',
        'google_plus' => '',
        'linkedin' => '',
        'bio' => '',
        'user_image' => 'user2.jpg',
        'user_image_path' => 'images/users/user2.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'id'=> 3,
        'role' => 'contributor',
        'active' => '1',
        'name' => 'Aminu Mobolaji',
        'username' => 'aminuji',
        'email' => 'gjustina@yahoo.com',
        'password' => Hash::make('password'),
        'facebook' => 'https://facebook.com/aminuji',
        'twitter' => 'https://twitter.com/waleat',
        'google_plus' => '',
        'linkedin' => '',
        'bio' => '',
        'user_image' => 'user3.jpg',
        'user_image_path' => 'images/users/user3.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'id'=> 4,
        'role' => 'author',
        'active' => '1',
        'name' => 'Funmilade Adeoluwa',
        'username' => 'funmiwa',
        'email' => 'tolulope.uzodimma@gmail.com',
        'password' => Hash::make('password'),
        'facebook' => 'https://facebook.com/funmiwa',
        'twitter' => 'https://twitter.com/waleat',
        'google_plus' => '',
        'linkedin' => '',
        'bio' => '',
        'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/logo/user_avatar.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'id'=> 5,
        'role' => 'subscriber',
        'active' => '1',
        'name' => 'Toke Amaechi',
        'username' => 'tokeamchi',
        'email' => 'dadeyemo@esther.net ',
        'password' => Hash::make('password'),
        'facebook' => 'https://facebook.com/tokeamchi',
        'twitter' => 'https://twitter.com/waleat',
        'google_plus' => '',
        'linkedin' => '',
        'bio' => '',
        'user_image' => 'user_avatar.png',
        'user_image_path' => 'images/logo/user_avatar.png',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    ]
    
);

    }
}
