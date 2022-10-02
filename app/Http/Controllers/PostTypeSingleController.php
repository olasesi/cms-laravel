<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostTypeSingleController extends Controller
{
   
    public function showsinglecategory($id){
        
        $fetching_posts = DB::table('posts')->join('category_sections', 'category_sections.category', '=', 'posts.category_section_id')->join('users', 'users.id', '=', 'posts.user_id')->where([['category_sections.category', '=', $id], ['publish_time', '=', 'Published'], ['visibility', '=', 'Public']])->orderBy('order', 'desc')->get();
       
        return view('showsinglecategory', ['fetching_posts'=>$fetching_posts]);
        
       
    } 

}
