<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class NewsWebsiteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    /**@test */
    public function test_post_can_be_added()
    {
  $this->withoutExceptionHandling();

  $response = $this->post('/save-post', [
    'id' => 1,
   'title' => 'Netcix cuts out the chill with an integrated personal trainer on running.',
    'slug' => Str::slug('Netcix cuts out the chill with an integrated personal trainer on running.'),
    'section_id' => '2',
    'excerpt' => 'Netcix cuts out the chill with an integrated personal1.',
    'body' => "A farmers in the  and on equivalent to that switched seeds.",
    'admin_id' => '1','image' => 'health1.jpg','image_path' => 'images/posts/health/health1.jpg','video_path' => 'https://www.youtube.com/watch?v=_0UO1NcheAE', 'video_placeholder' => 'https://img.youtube.com/vi/_0UO1NcheAE/default.jpg','publish_time' => 'Published','discussion' => 'Allow comment','visibility' => 'Public', 
    'order' => null,'recent' => null,'breaking_news' => 'on','most_popular' => null,'favourite' => null,'hot_topics' => null,
    'watch_now' => null,'trending' => null,'more_news' => null,'created_at' => Carbon::now(),
    'user_id' => '1',
    'updated_at' => '2023-03-28 02:02:42'
]);

        $response -> assertOk();
        //$this->assertCount(1, Post::all());
      
    }
}
