<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;

class PostController extends Controller
{

    public function showpost(){
       
        $posts = DB::table('posts as p')->leftJoin('users as u', 'u.id', '=', 'p.user_id')->leftJoin('admins as a', 'a.id', '=', 'u.admin_id')->leftJoin('sections', 'sections.id', '=', 'p.section_id')->select( 'p.id','p.slug', 'p.title', 'a.name','u.id','u.admin_id', 'u.username', 'u.email', 'category', 'p.image_path','color','p.user_id', 'p.approve', 'p.order', 'p.publish_time', 'p.pending_preview','p.visibility', 'p.discussion', 'p.created_at')->orderBy('p.id', 'desc')->paginate(10);      //Please confirm this

        //dd($posts);

        return view('admin.showpost',['posts'=>$posts]);

    }
    
    
 
    public function createpost(){
        if(Auth::user()->admin_id == 4) {
            redirect(route('admin.dashboard'));
        }
        $category = DB::table('sections')->select('category', 'id')->orderBy('id', 'asc')->get();
    
       return view('admin.createpost', ['category'=>$category]);
    }

    public function savepost(Request $request){
        if(Auth::user()->admin_id == 4) {
            redirect(route('admin.dashboard'));
        }
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

        if($request->input('title')){
          $request->validate([
             'title' => 'required|max:100|min:3|max:100',
             'excerpt' => 'nullable|min:3',
             'discussion' => 'required',
            'category' => 'required',
             'tags' => 'nullable',
             'publish_time'=> 'nullable|date',
             'pending_preview'=> 'nullable',
             'body'=> 'nullable',
             'image'=> 'nullable|image|mimes:jpeg,jpg,png|max:2048',
             'recent' => 'nullable',
             'visibility'=> 'required',
             'order'=> 'nullable|numeric',
             'video_path' => 'nullable|url',
             'breaking_news' => 'nullable',
             'most_popular' => 'nullable',
             'favourite' => 'nullable',
             'hot_topics' => 'nullable',
             'watch_now' => 'nullable',
             'trending' => 'nullable',
             'more_news' => 'nullable',
            ]
     );
    }

      
    $new_slug = Str::slug($request->title);
    $slug_no = Post::where('slug', $new_slug)->count();
    if($slug_no >= 1){
        $new_slug .= $slug_no + 1;
    }

       $post= Post::create([
        'title' => $request->title,
        'slug' => $new_slug,
        'user_id' => auth()->id(),
        'excerpt' => $request->excerpt,
        'tags' => $request->tags,
        'discussion' => $request->discussion,
        'section_id' => $request->category,
        'body' => $request->body,
        'image' => $request->image,
        'publish_time' => $request->publish_time,
        'pending_preview' => $request->pending_preview,
        'visibility' => $request->visibility,
        'order' => $request->order,
        'video_path' => $request->video_path,
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


    public function deletepost($id){
        if(Auth::user()->admin_id == 3){  //This is for Authors. They will be able to delete the posts they created
           $get_slug = Post::select('user_id')->where('slug', $id)->first();
           if($get_slug != user()->id){
            return redirect(route('admin.dashboard'));
           }
        }
        


        $user_image = Post::where('slug', $id)->first();
        if($user_image->image != 'default.jpg'){
            $image_path = public_path('storage/'.$user_image->image_path);
            File::delete($image_path);
        }

        // if(preg_match('/(<img[^>]+>)/i', $user_image->body)){
        //     $image_path = public_path('storage/'.$user_image->image_path);
        //     File::delete($image_path);
        // }
        

        $user_image->delete();
        return back()->with('success', 'Post has been successfully deleted');

     }

     public function approvepost($id){
        if(Auth::user()->admin_id == 3 || Auth::user()->admin_id == 4){
             return redirect(route('admin.dashboard'));
         }

        $post = Post::where('slug', $id)->first();
        $post->approve = 1;
        $post->save();

        return back()->with('approved', 'Post has been approved');
     }

     public function disapprovepost($id){
        if(Auth::user()->admin_id == 3 || Auth::user()->admin_id == 4){
            return redirect(route('admin.dashboard'));
        }

       $post = Post::where('slug', $id)->first();
       $post->approve = 0;
       $post->save();

       return back()->with('disapproved', 'Post has been disapproved');

     }

    public function searchpost($id){
        //$admin = Post::users()->sections()->where('id', auth()->id())->first()->id;



     }



}