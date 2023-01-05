<?php

namespace App\Http\Controllers;

//use App\Models\Menu;
//use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    //
    public function index()
    {

        $social_media_links = DB::table('social_medias')->select('name', 'url')->get();
        $top_bar_links = DB::table('top_bar_links')->select('title', 'url')->get();
        $mainmenu_bar_links = DB::table('menus')->select('title', 'content_type')->whereIn('id', [1, 2, 3, 4, 5])->get();
        $mainmenu_all = DB::table('menus')->select('title', 'content_type')->whereIn('id', [6, 7, 8, 9, 10, 11, 12, 13])->get();
        $post_category = DB::table('category_sections')->select('id', 'category', 'rank')->where('category', '!=', 'Uncategorized')->orderBy('rank', 'asc')->get();
        $ad_banner = DB::table('ads')->select('end_date', 'banner_name', 'image', 'image_path', 'image_url')->get();
        $website_info = DB::table('website_info')->select('website_name', 'logo_image_path')->get();
        $quick_links = DB::table('quick_links')->select('link_title', 'url')->get();

        $breaking_news = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['breaking_news', '=', 'on'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published']])->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $post = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published']])->take(6)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $post_video = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['video_placeholder', '!=', null], ['video_path', '!=', null]])->whereIn('posts.id', [1, 2, 3, 4, 5, 6])->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();
        
        $body_post_slider = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published']])->take(3)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $two_side_post = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published']])->offset(3)->take(2)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $sidebar_recent = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['recent', '=', 'on']])->take(6)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $sidebar_favourites = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['favourite', '=', 'on']])->take(6)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $most_popular = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['most_popular', '=', 'on']])->take(5)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $hot_topics = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['hot_topics', '=', 'on']])->take(8)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $hot_topics_sidebar = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['hot_topics', '=', 'on']])->offset(8)->take(3)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $watch_now = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['watch_now', '=', 'on']])->take(3)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();
        
        $watch_now_side = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['watch_now', '=', 'on']])->offset(3)->take(3)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $random_news = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published']])->inRandomOrder()->take(2)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $trending = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['trending', '=', 'on']])->take(2)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();

        $more_news = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category', '!=', 'Uncategorized'], ['visibility', '=', 'Public'], ['publish_time', '=', 'Published'], ['more_news', '=', 'on']])->take(6)->orderBy('order', 'desc')->orderBy('posts.id', 'desc')->get();


       //$ipaddress = GeoIP::getLocation($ip = null);   //This will give out currect IP address
       $key = Config::get('services.openweather.key');
       $ip_address = (geoip()->getLocation('105.112.188.236'));

    $weather = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=".$ip_address->lat."&lon=".$ip_address->lon."&appid=".$key."&units=metric")->json();


        return view('welcome', ['social_media_links' => $social_media_links, 'top_bar_links' => $top_bar_links, 'mainmenu_bar_links' => $mainmenu_bar_links, 'post_category' => $post_category, 'ad_banner' => $ad_banner, 'website_info' => $website_info, 'quick_links' => $quick_links, 'breaking_news' => $breaking_news, 'post' => $post, 'post_video' => $post_video, 'mainmenu_all' => $mainmenu_all, 'body_post_slider' => $body_post_slider, 'two_side_post' => $two_side_post, 'sidebar_recent' => $sidebar_recent, 'sidebar_favourites' => $sidebar_favourites, 'most_popular' => $most_popular, 'hot_topics' => $hot_topics, 'watch_now' => $watch_now, 'random_news' => $random_news, 'trending' => $trending, 'watch_now_side'=>$watch_now_side,  'hot_topics_sidebar'=>$hot_topics_sidebar, 'more_news'=>$more_news, 'weather'=>$weather]);
    }
}
