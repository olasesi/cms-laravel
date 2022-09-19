<?php

namespace App\Http\Controllers;

//use App\Models\Menu;
//use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index()
    {
        //$menu = Menu::all();
        // $menu =  Menu::find(1);
        $social_media_links = DB::table('social_medias')->select('name', 'url')->get();
        $top_bar_links = DB::table('top_bar_links')->select('title', 'url')->get();
        $mainmenu_bar_links = DB::table('menus')->select('title', 'content_type')->get();
        $post_category = DB::table('category_sections')->select('category', 'rank')->where('category', '!=', 'Uncategorized')->orderBy('rank', 'asc')->get();
        $ad_banner = DB::table('ads')->select('end_date', 'banner_name', 'image', 'image_path', 'image_url')->get();
        $website_info = DB::table('website_info')->select('website_name', 'logo_image_path')->get();
        $quick_links = DB::table('quick_links')->select('link_title', 'url')->get();

        $post = DB::table('posts')->join('category_sections', 'category_sections.id', '=', 'posts.category_section_id')
            ->join('users', 'users.id', '=', 'posts.user_id')->select('*')->get();

        //dd($post);

        $open_weathers = DB::table('open_weathers')->select('api_key', 'latitude', 'longitude', 'language')->get();
        $weather = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=" . $open_weathers[0]->latitude . "&lon=" . $open_weathers[0]->longitude . "&appid=" . $open_weathers[0]->api_key)->json();

        return view('welcome', ['social_media_links' => $social_media_links, 'top_bar_links' => $top_bar_links, 'mainmenu_bar_links' => $mainmenu_bar_links, 'post_category' => $post_category, 'ad_banner' => $ad_banner, 'website_info' => $website_info, 'quick_links' => $quick_links, 'post' => $post, 'weather' => $weather]);
    }
}
