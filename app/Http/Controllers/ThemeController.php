<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Theme;

class ThemeController extends Controller
{

    public function createtheme(){
        return view('admin.createtheme');
    }

    public function showtheme(){
    $showtheme = DB::table('themes')->select('id','theme_name', 'active','primary_color', 'secondary_color', 'tertiary_color','body_color','light_color','dark_color')->get();

//query order
    
    return view('admin.showtheme', ['showtheme'=>$showtheme]);
    }

  
    public function savetheme(Request $request){
       
      $request->validate([
            'theme_name' => 'required|max:30|min:3|unique:themes',
            'primary_color' => 'nullable',
             'secondary_color' => 'nullable',
             'tertiary_color' => 'nullable',
             'body_color'=> 'nullable',
             'light_color'=> 'nullable',
             'dark_color'=> 'nullable',
            
        ]
    );
    
     Theme::create($request->all());

    return back()->with('success', 'Theme was successfully created.');
          
        
    }



    public function edittheme($id){
        $edittheme = Theme::find($id);
        return view('admin.edittheme', ['theme'=>$edittheme]);
    }


    public function updatetheme(Request $request, $id){
       
        $request->validate([
            'theme_name' => 'required|max:30|min:3',
            'primary_color' => 'nullable',
             'secondary_color' => 'nullable',
             'tertiary_color' => 'nullable',
             'body_color'=> 'nullable',
             'light_color'=> 'nullable',
             'dark_color'=> 'nullable',
            
        ]
    );
    
    $find_theme = Theme::find($id);
    
    $find_theme->theme_name =  $request->get('theme_name');
    $find_theme->primary_color = $request->get('primary_color');
    $find_theme->secondary_color = $request->get('secondary_color');
    $find_theme->tertiary_color = $request->get('tertiary_color');
    $find_theme->body_color = $request->get('body_color');
    $find_theme->light_color = $request->get('light_color');
    $find_theme->dark_color = $request->get('dark_color');

    $find_theme->save();

      
        //To deal with the Fail later

        return back()->with('success', 'Theme was successfully updated.');
    }

    
    public function activatetheme($id){
        Theme::where('active', 1)
        ->update(['active' => 0]);

        Theme::where('id', $id)
          ->update(['active' => 1]);

          return back()->with('success', 'Theme was successfully activated.');
    }



    public function deletetheme($id)
    {
        $delete_theme = Theme::find($id);
        $delete_theme->delete(); 
 //To deal with the Fail later
        return back()->with('success', 'Theme was successfully deleted.');  
    } 
}
