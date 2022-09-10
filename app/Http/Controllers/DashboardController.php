<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Menu;




class DashboardController extends Controller
{
    public function index(){
     
     DB::table('user_types')->insertOrIgnore([
      ['id' => 1, 'user_type' => 'super admin'],
      ['id' => 2, 'user_type' => 'editor'],
      ['id' => 3, 'user_type' => 'contributor'],
      ['id' => 4, 'user_type' => 'author'],
      ['id' => 5, 'user_type' => 'subscriber'],
     
  ]);

 
     DB::table('top_bar_links')->insertOrIgnore([
      ['id' => 1],
      ['id' => 2],
      ['id' => 3],
      ['id' => 4],
     
  ]);


  DB::table('category_sections')->insertOrIgnore([
   ['id' => 1,'category' => config('constants.uncategorized_posts')]
   
]);
       return view('admin.dashboard');
    }

   //  public function menu(){

       
   //      return view('admin.createmenu');
   //   }
}
