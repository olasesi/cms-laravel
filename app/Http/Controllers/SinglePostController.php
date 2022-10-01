<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function showsinglepost($id){
        
        $fetching_posts = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['posts.id', '=', $id], ['publish_time', '=', 'Published'], ['visibility', '=', 'Public']])->orderBy('order', 'desc')->get();
       
        return view('showsinglepost', ['fetching_posts'=>$fetching_posts]);
        
       
    } 

}
