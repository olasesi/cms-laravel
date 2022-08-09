<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Menu;




class DashboardController extends Controller
{
    public function index(){
      DB::table('social_medias')->insertOrIgnore([
         ['id' => 1, 'name' => 'Facebook'],
         ['id' => 2, 'name' => 'Twitter'],
         ['id' => 3, 'name' => 'Google plus'],
         ['id' => 4, 'name' => 'Instagram'],
         ['id' => 5, 'name' => 'Youtube'],
         ['id' => 6, 'name' => 'Linkedin'],
     ]);

     DB::table('top_bar_links')->insertOrIgnore([
      ['id' => 1],
      ['id' => 2],
      ['id' => 3],
      ['id' => 4],
     
  ]);

       return view('admin.dashboard');
    }

    public function menu(){

       
        return view('admin.createmenu');
     }
}
