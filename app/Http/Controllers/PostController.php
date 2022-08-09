<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function indexpost(){
        return view('admin.indexpost');
    }



    public function createpost(){
        return view('admin.createpost');
    }

}
