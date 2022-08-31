<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdController extends Controller
{
      public function editad(){
       
 
        //$item = CategorySection::findOrFail($id);
        // $users = DB::table('users')
        //         ->whereColumn('updated_at', '>', 'created_at')
        //         ->get();

        $ad_banner = DB::table('ads')->select('end_date','banner_name', 'image', 'image_path')->get();
        return view('admin.editad', ['ad_banner'=>$ad_banner]);
        
        
       
    } 

    public function updatead(){
        
        //$item = CategorySection::findOrFail($id);
        //return view('admin.editad');
        
       
    } 
}
