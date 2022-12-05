<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdController extends Controller
{
      public function editad(){
       
        $ad_banners = DB::table('ads')->select('end_date', 'banner_name', 'image', 'image_path', 'image_url')->get();
        return view('admin.editad', ['ad_banner'=>$ad_banners]);
      
    } 

    public function updatead(Request $request){
        
        $request->validate([
            'banner_1_name'=> 'min:3|max:30',
             'banner_1_url'=> 'url|nullable',
             'end_1_date'=> 'date_format:Y-m-d',
             'image_1_banner'=> 'nullable|mimes:jpeg,png|max:2048',
         ]
     );
     
     $select_for_delete = DB::table('ads')->where('id', '1')->value('image_path');
     DB::table('ads')->where('id', '1')->update(['banner_name' => $request->get('banner_1_name'), 'image_url' => $request->get('banner_1_url') ?? NULL, 'end_date' => $request->get('end_1_date') ?? NULL ,'image' => $request->get('image_1_banner')]);
    
    
     if ($request->file('image_1_banner')){
       
        if(File::exists('public/storage/'.$select_for_delete)) {
            
            File::delete($select_for_delete);
     }

        $file_name = time().'_'.$request->image_1_banner->getClientOriginalName();
        $file_path = $request->file('image_1_banner')->storeAs('ads', $file_name, 'public');
    

        DB::table('ads')->where('id', 1)->update(['image' => $file_name]);
        DB::table('ads')->where('id', 1)->update(['image_path' => $file_path]);
    }
   
   

    //$destinationPath = public_path('storage/'.$select_for_delete);
   
    

    return back()->with('success', 'Details has been updated');
       
       
       
    } 
}
