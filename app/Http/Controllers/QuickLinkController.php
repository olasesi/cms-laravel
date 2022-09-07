<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class QuickLinkController extends Controller
{
    public function editquicklink(){
       
 
        $quick_link = DB::table('quick_links')->select('link_title', 'url')->get();
       return view('admin.editquicklink', ['quick_link'=>$quick_link]);
        
        
       
    } 

    public function updatequicklink(Request $request){
        $request->validate([
             'link_1_title'=> 'nullable|min:3',
             'link_1_url'=> 'nullable|url',
             'link_2_title'=> 'nullable|min:3',
             'link_2_url'=> 'nullable|url',
             'link_3_title'=> 'nullable|min:3',
             'link_3_url'=> 'nullable|url',
             'link_4_title'=> 'nullable|min:3',
             'link_4_url'=> 'nullable|url',
             'link_5_title'=> 'nullable|min:3',
             'link_5_url'=> 'nullable|url',
             'link_6_title'=> 'nullable|min:3',
             'link_6_url'=> 'nullable|url',
             
         ]
     );
    
     

     DB::table('quick_links')->where('id', '1')->update(['link_title' => $request->get('link_1_title') ?? null, 'url' => $request->get('link_1_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);

     DB::table('quick_links')->where('id', '2')->update(['link_title' => $request->get('link_2_title') ?? null, 'url' => $request->get('link_2_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);

     DB::table('quick_links')->where('id', '3')->update(['link_title' => $request->get('link_3_title') ?? null, 'url' => $request->get('link_3_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);

     DB::table('quick_links')->where('id', '4')->update(['link_title' => $request->get('link_4_title') ?? null, 'url' => $request->get('link_4_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);

     DB::table('quick_links')->where('id', '5')->update(['link_title' => $request->get('link_5_title') ?? null, 'url' => $request->get('link_5_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);

     DB::table('quick_links')->where('id', '5')->update(['link_title' => $request->get('link_6_title') ?? null, 'url' => $request->get('link_6_url') ?? null, 'updated_at' => Carbon::now(), 'created_at' => Carbon::now()]);
    
    
    
          return back()->with('success', 'Details was successfully updated');
    
    }
    

}
