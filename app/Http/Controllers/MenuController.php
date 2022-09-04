<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MenuController extends Controller
{
    public function editmenu(){
        $main_menu = DB::table('menus')->select('title', 'content_type')->get();


        return view('admin.editmenu', ['main_menu'=>$main_menu]);
    }

    public function updatemenu(Request $request){
         $request->validate([
              'title1'=> 'nullable|min:3|max:15',
              'category1'=> 'required',
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
     
       //To fix updated_at
      //$confirm_update = DB::table('menus')->select('title', 'content_type')->where('id', '1')->get();
      
     

      DB::table('menus')->where('id', '1')->update(['title' => $request->get('title1') ?? null, 'content_type' => $request->get('category1') ?? null, 'updated_at' => Carbon::now()]);
      DB::table('menus')->where('id', '2')->update(['title' => $request->get('title2') ?? null, 'content_type' => $request->get('link2') ?? null, 'updated_at' => Carbon::now()]);
      DB::table('menus')->where('id', '3')->update(['title' => $request->get('title3') ?? null, 'content_type' => $request->get('category3') ?? null, 'updated_at' => Carbon::now()]);
      DB::table('menus')->where('id', '4')->update(['title' => $request->get('title4') ?? null, 'content_type' => $request->get('link4') ?? null, 'updated_at' => Carbon::now()]);
      DB::table('menus')->where('id', '5')->update(['title' => $request->get('title5') ?? null, 'content_type' => $request->get('category5') ?? null, 'updated_at' => Carbon::now()]);
     
     
     
           return back()->with('success', 'Details was successfully updated');
     
     }
     



}
