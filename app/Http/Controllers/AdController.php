<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdController extends Controller
{
      public function editad(){
       
 
        //$item = CategorySection::findOrFail($id);
        // $users = DB::table('users')
        //         ->whereColumn('updated_at', '>', 'created_at')
        //         ->get();

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
     
     $select_for_delete = DB::table('ads')->select('image_path')->where('id', '1')->get();

     DB::table('ads')->where('id', '1')->update(['banner_name' => $request->get('banner_1_name'), 'image_url' => $request->get('banner_1_url') ?? NULL, 'end_date' => $request->get('end_1_date') ?? NULL ,'image' => $request->get('image_1_banner')]);

     if ($request->file('image_1_banner')){
        $file_name = time().'_'.$request->image_1_banner->getClientOriginalName();
        $file_path = $request->file('image_1_banner')->storeAs('ads', $file_name, 'public');
    

        DB::table('ads')->where('id', 1)->update(['image' => $file_name]);
        DB::table('ads')->where('id', 1)->update(['image_path' => $file_path]);
    }
   
    $destinationPath = public_path('/ads/'.$select_for_delete);
    dd($destinationPath); 
 if(File::exists('public/storage/'.$destinationPath)) {
    
     File::delete($destinationPath);
 }
    

    return back()->with('success', 'Ad banner has been updated');
       
        //return view('admin.editad');
        
       
    } 
}