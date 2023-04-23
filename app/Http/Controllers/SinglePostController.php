<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class SinglePostController extends Controller
{
    public function showsinglepost($postslug){
        $time = Carbon::now();

        $fetching_posts = DB::table('posts')->leftJoin('sections', 'sections.id', '=', 'posts.section_id')->leftJoin('users', 'users.id', '=', 'posts.user_id')->where([['posts.slug', '=', $postslug], ['publish_time', '<', $time], ['visibility', '=', 'Public'], ['pending_preview', '=', null]])->orderBy('order', 'desc')->get();      //Please confirm this
       
        return view('showsinglepost', ['fetching_posts'=>$fetching_posts]);
        
    } 

}
