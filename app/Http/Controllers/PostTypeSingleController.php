<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostTypeSingleController extends Controller
{
   
    public function showsinglecategory($id){
        
        $fetching_posts = DB::table('posts')->join('sections', 'sections.category', '=', 'posts.section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['sections.category', '=', $id], ['publish_time', '=', 'Published'], ['visibility', '=', 'Public']])->orderBy('order', 'desc')->get();
       
        return view('showsinglecategory', ['fetching_posts'=>$fetching_posts]);
        
       
    } 

}
