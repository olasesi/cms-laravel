<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenWeatherController extends Controller
{
    public function showweather(){

        return Http:: get("https://api.openweathermap.org/data/2.5/weather?lat=6.604253&lon=3.345762&appid=b6836cf27a00bfb53bca8f8ce0c7d2b7")->json();
        // $posts = DB::table('posts')->join('users', 'posts.id', '=', 'users.post_id')->select( 'title', 'role')->get();
        // return view('admin.showpost',['posts'=>$posts]);
}



}
