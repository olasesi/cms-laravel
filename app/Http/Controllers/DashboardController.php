<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Section;



class DashboardController extends Controller
{
    public function index(){
  
    $number_post = Post::all()->count();
    $number_category_section = Section::all()->count() - 1;     //Substract the uncategorized

    $drafts = Post::where('publish_time', 'Draft')->count();
    $pending_preview = Post::where('publish_time', 'Pending preview')->count();
        
    return view('admin.dashboard', ['number_post' => $number_post, 'number_category_section'=>$number_category_section, 'drafts'=>$drafts, 'pending_preview'=>$pending_preview]);
    }

}
