<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Database\Schema\Blueprint;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', 'App\Http\Controllers\HomeController@index');

 Route::get('/admin','App\Http\Controllers\AdminController@index')->name('admin.show'); 

 Route::get('admin/routes', 'App\Http\Controllers\AdminController@admin')->middleware('admin');

//  Route::get('/home',function(){

//     return view('admin.home');

//  }); 

 

 Route::get('/admin/forget',function(){

   return view('admin.forget');

})->name('admin.forget'); 



/*/// To call the weather API later 
 Through a facade
Config::get('services.google.key');

// Through a helper
config('services.google.key');
*/