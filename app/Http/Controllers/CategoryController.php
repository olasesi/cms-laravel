<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorySection;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function createcategory(){
 return view('admin.createcategory');
    }

    public function savecategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:3|max:20',      //shall I make it unique
            'rank' => 'nullable|numeric'
           ]);
            
           $confirmcategory = DB::table('category_sections')->where('category', '=', $request['category_name'])->count();
        if($confirmcategory == 0){
            $name = new CategorySection;
            $name->category = $request->category_name;
            $name->rank = $request->rank;
            $name->save();
           return back()->with('success', '"'.$request->category_name.'" category has been successfully added');
 }else{
    return back()->with('failed', '"'.$request->category_name.'" is already in the list');

 }
    }

    public function showcategory(){
        $item = CategorySection::all();
       return view('admin.showcategory',['item'=>$item]);
    } 


    public function editcategory($id){
        
        $item = CategorySection::findOrFail($id);
        return view('admin.editcategory', ['category'=>$item]);
        
       
    } 


    public function updatecategory(Request $request, $id){
        
        //$item = CategorySection::findOrFail($id);
        //return view('admin.editcategory', ['category'=>$item]);
        
       
    } 
}
