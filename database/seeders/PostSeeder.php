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
           'approve' => 1,
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
            'image' => 'health1.jpg','image_path' => 'images/posts/health1.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public', 
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ],
    
        [
            'id' => 2,
           'approve' => 1,
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
            'image' => 'health2.jpg','image_path' => 'images/posts/health2.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '5',
            'updated_at' => Carbon::now()
        ],

        [
            'id' => 3,
           'approve' => 1,
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
            'image' => 'travel1.jpg','image_path' => 'images/posts/travel1.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 4,
           'approve' => 1,
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
            'image' => 'travel2.jpg','image_path' => 'images/posts/travel2.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ],
        
        [
            'id' => 5,
           'approve' => 0,
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
            'image' => 'travel3.jpg','image_path' => 'images/posts/travel3.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '5',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 6,
           'approve' => 1,
            'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'image' => 'sports1.jpg','image_path' => 'images/posts/sports1.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 7,
           'approve' => 1,
            'title' => 'Hands on with Apple Watch Series 4',
            'slug' => Str::slug('Hands on with Apple Watch Series 4'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Hands on with Apple Watch Series 4.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                       ",
            'image' => 'tech1.jpg','image_path' => 'images/posts/tech1.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 8,
           'approve' => 0,
            'title' => 'Easy lemon rice (yellow rice)',
            'slug' => Str::slug('Easy lemon rice (yellow rice)'),
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Easy lemon rice (yellow rice).',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'health3.jpg','image_path' => 'images/posts/health3.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 9,
           'approve' => 1,
            'title' => '18 month old shoots himself by gun',
            'slug' => Str::slug('18 month old shoots himself by gun2'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => '18 month old shoots himself by gun.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.",
            'image' => 'fashion1.jpg','image_path' => 'images/posts/fashion1.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ]
        ,
        
        [
            'id' => 10,
           'approve' => 0,
            'title' => 'Apple introduces larger Apple Watch',
            'slug' => Str::slug('Apple introduces larger Apple Watch3'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'travel4.jpg','image_path' => 'images/posts/travel4.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 11,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli5'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'sports2.jpg','image_path' => 'images/posts/sports2.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => 'on','breaking_news' => null,'most_popular' => null,'favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 12,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli6'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'sports3.jpg','image_path' => 'images/posts/sports3.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 13,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli7'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'tech2.jpg','image_path' => 'images/posts/tech2.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 14,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli8'),
            'section_id' => '2',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'health4.jpg','image_path' => 'images/posts/health4.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 15,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli9'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'fashion2.jpg','image_path' => 'images/posts/fashion2.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 16,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli10'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'travel5.jpg','image_path' => 'images/posts/travel5.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 17,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli11'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'sports4.jpg','image_path' => 'images/posts/sports4.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => null,'favourite' => 'on','hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 18,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli12'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'travel6.jpg','image_path' => 'images/posts/travel6.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 19,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli13'),
            'section_id' => '7',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'tech3.jpg','image_path' => 'images/posts/tech3.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 20,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli14'),
            'section_id' => '3',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'fashion3.jpg','image_path' => 'images/posts/fashion3.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 21,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli15'),
            'section_id' => '6',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'sports5.jpg','image_path' => 'images/posts/sports5.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '3',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 22,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli16'),
            'section_id' => '5',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'music1.jpg','image_path' => 'images/posts/music1.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '2',
            'updated_at' => Carbon::now()
        ]
        ,
        [
            'id' => 23,
           'approve' => 1,
            'title' => 'easy teriyaki chicken broccoli',
            'slug' => Str::slug('easy teriyaki chicken broccoli17'),
            'section_id' => '4',
            'tags'=> 'php, laravel',
            'excerpt' => 'Apple introduces larger Apple Watch.',
            'body' => "A farmers in the US’s South—faced with continued failure in their efforts to run on successful farms their launched a lawsuit claiming that “white racism” is to the blame for their inability to produce crop yields.
                         Black farmers in the US’s South— faced with continued failure their efforts to run successful farms their launched a lawsuit claiming that “white racism” is to blame for their inability to the produce crop yields and on equivalent to that switched seeds.
                        ",
            'image' => 'travel7.jpg','image_path' => 'images/posts/travel7.jpg','video_path' => null, 'publish_time' => null, 'pending_preview'=>null,'discussion' => 'Allow comment','visibility' => 'Public',
            'order' => null,'recent' => null,'breaking_news' => null,'most_popular' => 'on','favourite' => null,'hot_topics' => null,
            'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
            'user_id' => '1',
            'updated_at' => Carbon::now()
        ]

    ]);
    }
}

