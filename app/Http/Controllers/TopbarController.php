<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    public function edittopbar(){
        $top_bar_links = DB::table('top_bar_links')->select('title', 'url')->get();
        
        return view('admin.edittopbar', ['top_bar_links'=>$top_bar_links]);
    }

    public function updatetopbar(Request $request){
        $request->validate([
            'title1'=> 'nullable|min:3|max:20',
             'url1'=> 'nullable|url',
             'title2'=> 'nullable|min:3|max:20',
             'url2'=> 'nullable|url',
             'title3'=> 'nullable|min:3|max:20',
             'url3'=> 'nullable|url',
             'title4'=> 'nullable|min:3|max:20',
             'url4'=> 'nullable|url',
            
             
         ]
     );
     
     DB::table('top_bar_links')->where('id', '1')->update(['url' => $request->get('url1') ?? null, 'title' => $request->get('title1') ?? null ]);
     DB::table('top_bar_links')->where('id', '2')->update(['url' => $request->get('url2') ?? null, 'title' => $request->get('title2') ?? null ]);
     DB::table('top_bar_links')->where('id', '3')->update(['url' => $request->get('url3') ?? null, 'title' => $request->get('title3') ?? null ]);
     DB::table('top_bar_links')->where('id', '4')->update(['url' => $request->get('url4') ?? null, 'title' => $request->get('title4') ?? null ]);
    
     
     
          return back()->with('success', 'Details was successfully updated');
     
     }



}
