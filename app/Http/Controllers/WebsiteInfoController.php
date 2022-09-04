<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    public function editwebsiteinfo(){
       
        $website_info = DB::table('website_info')->select('website_name', 'logo_image_path', 'logo_name')->get();
        return view('admin.editwebsiteinfo', ['website_info'=>$website_info]);
   
    } 

    public function updatewebsiteinfo(Request $request){
        
        $request->validate([
            'website_name'=> 'min:3',
             'website_logo'=> 'nullable|mimes:jpeg,png|max:2048',
         ]
     );
     
     $select_for_delete = DB::table('website_info')->select('logo_image_path')->where('id', '1')->get();

     DB::table('website_info')->where('id', '1')->update(['website_name' => $request->get('website_name')]);

     if ($request->file('website_logo')){
        $file_name = time().'_'.$request->website_logo->getClientOriginalName();
        $file_path = $request->file('website_logo')->storeAs('images/logo', $file_name, 'public');
    

        DB::table('website_info')->where('id', 1)->update(['logo_name' => $file_name]);
        DB::table('website_info')->where('id', 1)->update(['logo_image_path' => $file_path]);
    }
   
    $destinationPath = public_path('/images/'.$select_for_delete);
    //dd($destinationPath); 
 if(File::exists('public/storage/'.$destinationPath)) {
    File::delete($destinationPath);
 }
    

    return back()->with('success', 'Website info has now been updated');
       
        //return view('admin.editad');
        
        // if($request->hasFile('image')) {

        //     $image       = $request->file('image');
        //     $filename    = $image->getClientOriginalName();
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(300, 300);
        //     $image_resize->save(public_path('images/ServiceImages/' .$filename));
        
        // }
       
    }
}
