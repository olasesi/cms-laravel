<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function editmenu(){
        $main_menu = DB::table('menus')->select('title', 'content_type')->get();
        
        return view('admin.editmenu', ['main_menu'=>$main_menu]);
    }

    public function updatemenu(Request $request){
         $request->validate([
              'title1'=> 'nullable|min:3|max:15',
              'title2'=> 'nullable|min:3|max:15',
              'link2'=> 'nullable|url',
              'title3'=> 'nullable|min:3|max:15',
              'category3'=> 'required',
              'title4'=> 'nullable|min:3|max:15',
              'link4'=> 'nullable|url',
              'title5'=> 'nullable|min:3|max:15',
              'category5'=> 'required',
          ]
      );
     
     
      DB::table('menus')->where('id', '1')->update(['title' => $request->get('title1') ?? null]);
      DB::table('menus')->where('id', '2')->update(['title' => $request->get('title2') ?? null, 'content_type' => $request->get('link2') ?? null]);
      DB::table('menus')->where('id', '3')->update(['title' => $request->get('title3') ?? null, 'content_type' => $request->get('category3') ?? null]);
      DB::table('menus')->where('id', '4')->update(['title' => $request->get('title4') ?? null, 'content_type' => $request->get('link4') ?? null]);
      DB::table('menus')->where('id', '5')->update(['title' => $request->get('title5') ?? null, 'content_type' => $request->get('category5') ?? null]);
     
     
     
           return back()->with('success', 'Details was successfully updated');
     
     }
     



}
