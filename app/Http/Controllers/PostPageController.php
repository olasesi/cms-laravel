<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostPageController extends Controller
{
    public function index(){
        
        return view('postpage');
    }
}
