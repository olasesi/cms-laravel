<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Admin;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function showpost(){
       
        $posts = DB::table('posts as p')->leftJoin('users', 'users.id', '=', 'p.user_id')->leftJoin('admins', 'admins.id', '=', 'p.admin_id')->leftJoin('sections', 'sections.id', '=', 'p.section_id')->select( 'p.id', 'title', 'admins.name', 'category', 'image_path','color','p.recent', 'p.breaking_news', 'p.most_popular', 'p.favourite', 'p.hot_topics', 'p.watch_now', 'p.trending', 'p.more_news', 'p.created_at')->whereNull('pending_preview')->whereNull('publish_time')->orWhere(function($query) {
            $query->where('publish_time','<', now());
        })->orderBy('p.id', 'desc')->paginate(10);

        return view('admin.showpost',['posts'=>$posts]);

        
      
        //$table->string('visibility');

    }
    
    
 
    public function createpost(){

        $category = DB::table('sections')->select('category', 'id')->orderBy('id', 'asc')->get();
    
       return view('admin.createpost', ['category'=>$category]);
    }

    public function savepost(Request $request){
      
         $request->validate([
            'title' => 'required|max:100|min:3|max:100|unique:posts',
            'excerpt' => 'nullable|min:3',
            'discussion' => 'required',
             'category' => 'required',
            'tags' => 'nullable',
            'publish_time'=> 'nullable|date',
            'pending_preview'=> 'nullable',
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
  

    $admin = Admin::find(1)->users()->where('id', auth()->id())->first()->id;

 
       $post= Post::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'user_id' => auth()->id(),
        'excerpt' => $request->excerpt,
        'tags' => $request->tags,
        'discussion' => $request->discussion,
        'section_id' => $request->category,
        'admin_id' => $admin,
        'body' => $request->body,
        'image' => $request->image,
        'publish_time' => $request->publish_time,
        'pending_preview' => $request->pending_preview,
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
    
    if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().'.'.$extension;
    
        $request->file('upload')->move(public_path('images'), $fileName);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('images/'.$fileName); 
        $msg = 'Image uploaded successfully'; 
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
           
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;
    }
       
    if ($request->file('image')){
        $file_name = time().'_'.$request->image->getClientOriginalName();
        $file_path = $request->file('image')->storeAs('images/posts', $file_name, 'public');
    
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

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }



    public function seahrchpost($id){
        //$admin = Post::users()->sections()->where('id', auth()->id())->first()->id;



     }



}
