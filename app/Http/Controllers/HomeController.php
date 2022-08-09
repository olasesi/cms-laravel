<?php

namespace App\Http\Controllers;

//use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        //$menu = Menu::all();
       // $menu =  Menu::find(1);
       $social_media_links = DB::table('social_medias')->select('name', 'url')->get();
       $top_bar_links = DB::table('top_bar_links')->select('title', 'url')->get();

        return view('welcome', ['social_media_links'=>$social_media_links, 'top_bar_links'=>$top_bar_links ]);
    }

  



 }
