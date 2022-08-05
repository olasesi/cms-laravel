<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorySection;

class CategoryController extends Controller
{

    public function createcategory(){
        return view('admin.createcategory');
    }

    public function savecategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:3|max:20'      //shall I make it unique
           ]);
            
           $name = new CategorySection;
           $name->category = $request->category_name;
        $name->save();
           return redirect()->route('admin.createcategory');
 
    }

    public function showcategory(){
        $item = CategorySection::all();
       return view('admin.showcategory',['item'=>$item]);
    } 
}
