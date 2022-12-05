<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Menu;




class DashboardController extends Controller
{
    public function index(){
  
       return view('admin.dashboard');
    }

}
