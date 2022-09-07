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
            'category_section_id' => '1',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal trainer on running.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '4','image' => '','image_path' => '','video_path' => '','publish_time' => '','discussion' => '0','visibility' => '0',
            'order' => '0','recent' => '0','breaking_news' => 'on','most_popular' => '0','favourite' => '0','hot_topics' => '0',
            'watch_now' => '0','trending' => '0','more_news' => '0','created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
    
        [
            'id' => 2,
           'title' => 'Parquet Courts on Resisting Nihilism ',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.'),
            'category_section_id' => '1',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '4','image' => '','image_path' => '','video_path' => '','publish_time' => '','discussion' => '0','visibility' => '0',
            'order' => '0','recent' => '0','breaking_news' => '0','most_popular' => '0','favourite' => '0','hot_topics' => '0',
            'watch_now' => '0','trending' => '0','more_news' => '0','created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
    
    ]);
    }
}

