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
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal1.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'health1.jpg','image_path' => 'images/posts/health1.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public', 
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ],
    
        [
            'id' => 2,
           'title' => 'Netcix cuts out the chill with an integrated personal trainer on running2. ',
            'slug' => Str::slug('Netcix cuts out the chill with an integrated personal trainer on running2.'),
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Netcix cuts out the chill with an integrated personal2.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'health2.jpg','image_path' => 'images/posts/health2.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ],

        [
            'id' => 3,
           'title' => 'Parquet Courts on Resisting Nihilism 1',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 1'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 1.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'travel1.jpg','image_path' => 'images/posts/travel1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 4,
           'title' => 'Parquet Courts on Resisting Nihilism 2',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 2'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 2.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'travel2.jpg','image_path' => 'images/posts/travel2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '4',
            'updated_at' => Carbon::now()
        ],
        
        [
            'id' => 5,
           'title' => 'Parquet Courts on Resisting Nihilism 3',
            'slug' => Str::slug('Parquet Courts on Resisting Nihilism 3'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world 3.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        Black farmers in the US’s South faced with continued failure in their efforts to run the successful farms launched a lawsuitSteve Jobs
                        For the first time the Swiss State Secretart for Economic Affair (SECO) has indicated that Uber taxi drivers should
                        Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'travel3.jpg','image_path' => 'images/posts/travel3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '5',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 6,
           'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'admin_id' => '1','image' => 'sports1.jpg','image_path' => 'images/posts/sports1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '6',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 7,
           'title' => 'Hands on with Apple Watch Series 4',
            'slug' => Str::slug('Hands on with Apple Watch Series 4'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Hands on with Apple Watch Series 4.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'admin_id' => '1','image' => 'tech1.jpg','image_path' => 'images/posts/tech1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '7',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 8,
           'title' => 'Easy lemon rice (yellow rice)',
            'slug' => Str::slug('Easy lemon rice (yellow rice)'),
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Easy lemon rice (yellow rice).',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'health3.jpg','image_path' => 'images/posts/health3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '8',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 9,
           'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'admin_id' => '1','image' => 'fashion1.jpg','image_path' => 'images/posts/fashion1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '9',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 10,
           'title' => 'Apple introduces larger Apple Watch',
            'slug' => Str::slug('Apple introduces larger Apple Watch'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'travel4.jpg','image_path' => 'images/posts/travel4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '10',
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 11,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'sports2.jpg','image_path' => 'images/posts/sports2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '11',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 12,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'sports3.jpg','image_path' => 'images/posts/sports3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '12',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 13,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'tech2.jpg','image_path' => 'images/posts/tech2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '13',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 14,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'health4.jpg','image_path' => 'images/posts/health4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '14',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 15,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'fashion2.jpg','image_path' => 'images/posts/fashion2.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '15',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 16,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'travel5.jpg','image_path' => 'images/posts/travel5.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '16',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 17,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'sports4.jpg','image_path' => 'images/posts/sports4.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '17',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 18,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'travel6.jpg','image_path' => 'images/posts/travel6.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '18',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 19,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'tech3.jpg','image_path' => 'images/posts/tech3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '19',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 20,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'fashion3.jpg','image_path' => 'images/posts/fashion3.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '20',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 21,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'sports5.jpg','image_path' => 'images/posts/sports5.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '21',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 22,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '5',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'music1.jpg','image_path' => 'images/posts/music1.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '22',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 23,
           'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'admin_id' => '1','image' => 'travel7.jpg','image_path' => 'images/posts/travel7.jpg','video_path' => null, 'video_placeholder' => null,'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '23',
            'updated_at' => Carbon::now()
        ]

    ]);
    }
}

