<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createpost(){
        return view('admin.createpost');
    }

}
