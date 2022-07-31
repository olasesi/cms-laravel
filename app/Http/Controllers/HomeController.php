<?php

namespace App\Http\Controllers;

//use App\Models\Menu;


class HomeController extends Controller
{
    //
    public function index(){
        //$menu = Menu::all();
       // $menu =  Menu::find(1);

        return view('welcome');
    }

  



 }
