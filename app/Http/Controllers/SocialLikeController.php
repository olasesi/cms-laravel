<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SocialLikeController extends Controller
{
    public function editsociallikes(){
        $social_likes = DB::table('social_likes')->select('name', 'code')->get();
        
        return view('admin.editsociallikes', ['social_likes'=>$social_likes]);
    }
   
 
    public function updatesociallikes(Request $request){
   $request->validate([
        'facebook'=> 'nullable',
        'twitter'=> 'nullable',
        'googleplus'=> 'nullable',
        'pinterest'=> 'nullable',
        'youtube'=> 'nullable',
        'linkedin'=> 'nullable'
        
    ]
);


DB::table('social_likes')->where('id', '1')->update(['url' => $request->get('facebook') ?? null]);
DB::table('social_likes')->where('id', '2')->update(['url' => $request->get('google') ?? null]);
DB::table('social_likes')->where('id', '3')->update(['url' => $request->get('twitter') ?? null]);
DB::table('social_likes')->where('id', '4')->update(['url' => $request->get('pinterest') ?? null]);
DB::table('social_likes')->where('id', '5')->update(['url' => $request->get('linkedin') ?? null]);
DB::table('social_likes')->where('id', '6')->update(['url' => $request->get('youtube') ?? null]);


     return back()->with('success', 'Details has successfully been updated');

}
}
