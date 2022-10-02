<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'id' => 1,
           'title' => 'Netcix cuts out the chill.',
            'slug' => Str::slug('Netcix cuts out the chill with an integrated personal trainer on running.'),
            'category_section_id' => 'Health',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal trainer on running.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'Health1.jpg','image_path' => 'images/posts/Health/Health1.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public', 
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
    
        [
            'id' => 2,
           'title' => 'Parquet Courts on Resisting Nihilism ',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.'),
            'category_section_id' => 'Health',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'Health1.jpg','image_path' => 'images/posts/Health/Health2.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
    
    ]);
    }
}

