<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorySection;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public function createcategory(){

        $uncategorized = DB::table('category_sections')->where('category', '=', 'Uncategorized')->count();
           if($uncategorized == 0){
            DB::table('category_sections')->insert(
                ['category' => 'Uncategorized']
            );
           }
        return view('admin.createcategory');
    }

    public function savecategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|min:3|max:20'      //shall I make it unique
           ]);
            

           $confirmcategory = DB::table('category_sections')->where('category', '=', $request['category_name'])->count();
if($confirmcategory == 0){
           $name = new CategorySection;
           $name->category = $request->category_name;
            $name->save();
           
            return back()->with('success', 'A new category has been successfully added');
 }else{
    return back()->with('failed', 'This category is already in the list');

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
