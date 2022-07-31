<?php

namespace App\Http\Controllers;

use App\Models\Menu;




class DashboardController extends Controller
{
    public function index(){
       return view('admin.dashboard');
    }

    public function menu(){

       
        return view('admin.createmenu');
     }
}
