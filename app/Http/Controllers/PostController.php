<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function showpost(){
        // $posts = DB::table('users')->rightJoin('posts', 'users.id', '=', 'posts.user_id')->select( 'title', 'role')->get();
        $posts = DB::table('users')->rightJoin('posts', 'users.id', '=', 'posts.user_id')->select( 'title', 'role')->get();
        return view('admin.showpost',['posts'=>$posts]);

    }



    public function createpost(){

        $category = DB::table('category_sections')->select('category', 'id')->orderBy('id', 'asc')->get();
    
       return view('admin.createpost', ['category'=>$category]);
    }

    public function savepost(Request $request){
       
         $request->validate([
            'title' => 'required|max:100|min:5|unique:posts',
            'excerpt' => 'nullable|min:5',
            'discussion' => 'required',
            'category' => 'required',
            'publish_time'=> 'required',
            'body'=> 'nullable',          
            'image'=> 'nullable|mimes:jpeg,jpg,png|max:2048',
            'recent' => 'nullable',
            'visibility'=> 'required',
            'order'=> 'nullable|numeric',
            'video_path' => 'nullable|url',
            'video_placeholder' => 'nullable',
            'breaking_news' => 'nullable',
            'most_popular' => 'nullable',
            'favourite' => 'nullable',
            'hot_topics' => 'nullable',
            'watch_now' => 'nullable',
            'trending' => 'nullable',
            'more_news' => 'nullable',
            
        


             ]
    );
  
   
    $post= Post::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'user_id' => auth()->id(),
        'excerpt' => $request->excerpt,
        'discussion' => $request->discussion,
        'category_section_id' => $request->category,
        'body' => $request->body,
        'image' => $request->image,
        'publish_time' => $request->publish_time,
        'visibility' => $request->visibility,
        'order' => $request->order,
        'video_path' => $request->video_path,
        'video_placeholder' => ($request->video_placeholder != null)?'https://img.youtube.com/vi/'.$request->video_placeholder.'/default.jpg':null,
        'recent' => $request->recent,
        'breaking_news' => $request->breaking_news,
        'most_popular' => $request->most_popular,
        'favourite' => $request->favourite,
        'hot_topics' => $request->hot_topics,
        'watch_now' => $request->watch_now,
        'trending' => $request->trending,
        'more_news' => $request->more_news,
        
    ]);
    

       
    if ($request->file('image')){
        $file_name = time().'_'.$request->image->getClientOriginalName();
        $file_path = $request->file('image')->storeAs('images/posts/'.$request->category, $file_name, 'public');
    
        $post->update([
            'image' => $file_name,
            'image_path' => $file_path      //Get file path fixed
        ]);
    }else{

        $post->update([
            'image' => 'default.jpg',
            'image_path' => 'images/logo/default.jpg',     
        ]);
    }
    

    // if($request->file('video')) {
    //     $file_name = time().'_'.$request->video->getClientOriginalName();
    //     $file_path = $request->file('video')->storeAs('videos/posts/'.$request->category, $file_name, 'public');
    
    //     $post->update([
    //         'video' => $file_name,
    //         'video_path' => $file_path  //Get file path fixed
    //     ]);
    // }
 
    //return response()->json('Post has been uploaded successfully');
    return back()->with('success', 'Post has been uploaded successfully');

    }

    // public function editpost($id){




    // }



}
