<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function showpost(){
        $posts = DB::table('posts')->join('users', 'posts.id', '=', 'users.post_id')->select( 'title', 'role')->get();
        return view('admin.showpost',['posts'=>$posts]);


       
    }



    public function createpost(){

        //$confirmcategory = DB::table('users')->select('role')->where('category', '=', $request['category_name'])->count();
        $category = DB::table('category_sections')->select('category', 'id')->get();
        $user = DB::table('user_types')->whereNotIn('id', [5])->get();
       return view('admin.createpost', ['user'=>$user, 'category'=>$category]);
    }

    public function savepost(Request $request){
       
         $request->validate([
            'title' => 'required|max:30|min:3',
            'excerpt' => 'nullable|min:3',
            'discussion' => 'required',
            'category' => 'required',
            'body'=> 'nullable',
            'image'=> 'nullable|mimes:jpeg,png|max:2048',
            'publish_time'=> 'required',
            'visibility'=> 'required',
            'order'=> 'nullable|numeric',
            'video' => 'nullable|mimes:mp4',


             ]
    );

    //dd($request->all());
    // function create_slug($string){
    //     $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    //     return $slug;
    //  }

    $post= Post::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'author' => auth()->id(),
        'excerpt' => $request->excerpt,
        'discussion' => $request->discussion,
        'category' => $request->category,
        'body' => $request->body,
        'image' => $request->image,
        'publish_time' => $request->publish_time,
        'visibility' => $request->visibility,
        'order' => $request->order,
        'video' => $request->video,
        'recent' => $request->recent,
        'breaking_news' => $request->breaking_news,
        'most_popular' => $request->most_popular,
        'favourite' => $request->favourite,
        'hot_topics' => $request->hot_topics,
        'watch_now' => $request->watch_now,
        'trending' => $request->trending,
        'more_news' => $request->more_news,
        
    ]);
    


    if($request->file('video')) {
        $file_name = time().'_'.$request->video->getClientOriginalName();
        $file_path = $request->file('video')->storeAs('contents/video', $file_name, 'public');
    
        $post->update([
            'video' => $file_name,
            'video_path' => $file_path  //Get file path fixed
        ]);
    }
    
    if ($request->file('image')){
        $file_name = time().'_'.$request->image->getClientOriginalName();
        $file_path = $request->file('image')->storeAs('contents/image', $file_name, 'public');
    
        $post->update([
            'image' => $file_name,
            'image_path' => $file_path      //Get file path fixed
        ]);
    }
    

    return back()->with('success', 'Post has been uploaded successfully');

    }

    // public function editpost($id){




    // }



}
