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
           'title' => 'Netcix cuts out the chill with an integrated personal trainer on running.',
            'slug' => Str::slug('Netcix cuts out the chill with an integrated personal trainer on running.'),
            'category_section_id' => '2',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal1.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'health1.jpg','image_path' => 'images/posts/health/health1.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public', 
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
    
        [
            'id' => 2,
           'title' => 'Netcix cuts out the chill with an integrated personal trainer on running2. ',
            'slug' => Str::slug('Netcix cuts out the chill with an integrated personal trainer on running2.'),
            'category_section_id' => '2',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal2.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'health2.jpg','image_path' => 'images/posts/health/health2.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],

        [
            'id' => 3,
           'title' => 'Parquet Courts on Resisting Nihilism 1',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 1'),
            'category_section_id' => '4',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 1.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'travel1.jpg','image_path' => 'images/posts/travel/travel1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
        [
            'id' => 4,
           'title' => 'Parquet Courts on Resisting Nihilism 2',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 2'),
            'category_section_id' => '4',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 2.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'travel2.jpg','image_path' => 'images/posts/travel/travel2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
        
        [
            'id' => 5,
           'title' => 'Parquet Courts on Resisting Nihilism 3',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 3'),
            'category_section_id' => '4',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 3.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'travel3.jpg','image_path' => 'images/posts/travel/travel3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 6,
           'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun'),
            'category_section_id' => '6',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'user_id' => '1','image' => 'sports1.jpg','image_path' => 'images/posts/sports/sports1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 7,
           'title' => 'Hands on with Apple Watch Series 4',
            'slug' => Str::slug('Hands on with Apple Watch Series 4'),
            'category_section_id' => '7',
            'excerpt' => 'Hands on with Apple Watch Series 4.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'user_id' => '1','image' => 'tech1.jpg','image_path' => 'images/posts/technology/tech1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 8,
           'title' => 'Easy lemon rice (yellow rice)',
            'slug' => Str::slug('Easy lemon rice (yellow rice)'),
            'category_section_id' => '2',
            'excerpt' => 'Easy lemon rice (yellow rice).',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'health3.jpg','image_path' => 'images/posts/health/health3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 9,
           'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun'),
            'category_section_id' => '3',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'user_id' => '1','image' => 'fashion1.jpg','image_path' => 'images/posts/fashion/fashion1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 10,
           'title' => 'Apple introduces larger Apple Watch',
            'slug' => Str::slug('Apple introduces larger Apple Watch'),
            'category_section_id' => '4',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'travel4.jpg','image_path' => 'images/posts/travel/travel4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ],
        [
            'id' => 11,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '6',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'sports2.jpg','image_path' => 'images/posts/sports/sports2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 12,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '6',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'sports3.jpg','image_path' => 'images/posts/sports/sports3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 13,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '7',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'tech2.jpg','image_path' => 'images/posts/technology/tech2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 14,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '2',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'health4.jpg','image_path' => 'images/posts/health/health4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 15,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '3',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'fashion2.jpg','image_path' => 'images/posts/fashion/fashion2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 16,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '4',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'travel5.jpg','image_path' => 'images/posts/travel/travel5.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 17,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '6',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'sports4.jpg','image_path' => 'images/posts/sports/sports4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 18,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '4',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'travel6.jpg','image_path' => 'images/posts/travel/travel6.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 19,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '7',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'tech3.jpg','image_path' => 'images/posts/technology/tech3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 20,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '3',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'fashion3.jpg','image_path' => 'images/posts/fashion/fashion3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 21,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '6',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'sports5.jpg','image_path' => 'images/posts/sports/sports5.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 22,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '5',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'music1.jpg','image_path' => 'images/posts/music/music1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 23,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'category_section_id' => '4',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'user_id' => '1','image' => 'travel7.jpg','image_path' => 'images/posts/travel/travel7.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),'updated_at' => Carbon::now()
        ]

    ]);
    }
}

