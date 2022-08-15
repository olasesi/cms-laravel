<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function editsocialmedia(){
        $social_media_links = DB::table('social_medias')->select('name', 'url')->get();
        
        return view('admin.editsocialmedia', ['social_media_link'=>$social_media_links]);
    }
   
 
    public function updatesocialmedia(Request $request){
   $request->validate([
        'facebook'=> 'nullable|url',
        'twitter'=> 'nullable|url',
        'googleplus'=> 'nullable|url',
        'instagram'=> 'nullable|url',
        'youtube'=> 'nullable|url',
        'linkedin'=> 'nullable|url'
        
    ]
);


DB::table('social_medias')->where('id', '1')->update(['url' => $request->get('facebook') ?? null]);
DB::table('social_medias')->where('id', '2')->update(['url' => $request->get('url2') ?? null]);
DB::table('social_medias')->where('id', '3')->update(['url' => $request->get('url3') ?? null]);
DB::table('social_medias')->where('id', '4')->update(['url' => $request->get('url4') ?? null]);
DB::table('social_medias')->where('id', '5')->update(['url' => $request->get('url5') ?? null]);
DB::table('social_medias')->where('id', '6')->update(['url' => $request->get('url5') ?? null]);


     return back()->with('success', 'Details was successfully updated');

}

}
