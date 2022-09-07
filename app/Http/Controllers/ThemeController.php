<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{
    public function createtheme(){
        //$theme = DB::table('themes')->select('primary_color', 'secondary_color','body_color','light_color','dark_color')->get();

        //return view('admin.edittheme', ['theme'=>$theme]);
    }

    public function edittheme(){
        //$theme = DB::table('themes')->select('primary_color', 'secondary_color','body_color','light_color','dark_color')->get();

        //return view('admin.edittheme', ['theme'=>$theme]);
    }
}
