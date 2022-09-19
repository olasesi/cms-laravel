<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            AdSeeder::class,
            MenuSeeder::class,
            PostSeeder::class,
            QuickLinkSeeder::class,
            SocialMediaSeeder::class,
            ThemeSeeder::class,
            TopBarSeeder::class,
            WebsiteInfoSeeder::class,
            


        ]);
        // \App\Models\User::factory(10)->create();
    }
}





