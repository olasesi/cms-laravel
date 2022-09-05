<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopbarController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\WebsiteInfoController;
use App\Http\Controllers\ThemeController;

use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->middleware('alreadyloggin')->name('admin.index');
Route::post('/admin/login', [AdminLoginController::class, 'savelogin'])->middleware('alreadyloggin')->name('admin.savelogin');
Route::get('/admin/forgetpassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->middleware('alreadyloggin')->name('admin.forgetpassword');
Route::post('/admin/saveforgetpassword', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->middleware('alreadyloggin')->name('admin.saveforgetpassword');



// Route::group(['middleware'=>'isnotadmin'], function(){
   
//     Route::get('/admin/menu', [DashboardController::class, 'menu']);
// });

//



Route::group(['prefix'=>'admin', 'middleware'=>'isadmin'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [AdminLoginController::class, 'showusers'])->name('admin.show');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('add-user', [AdminLoginController::class, 'createuser'])->name('admin.create');
    Route::post('add-user', [AdminLoginController::class, 'saveuser'])->name('admin.save');
    Route::post('edit-user/{id}', [AdminLoginController::class, 'edituser'])->name('admin.edit');
    Route::patch('update-user/{id}', [AdminLoginController::class, 'updateuser'])->name('admin.update');
    Route::post('delete-user/{id}', [AdminLoginController::class, 'deleteuser'])->name('admin.delete');
    Route::put('ban-user/{id}', [AdminLoginController::class, 'banuser'])->name('admin.ban');
    
    //Route::put('ban-user/{id}', [AdminLoginController::class, 'banuser'])->name('admin.ban');
    
    //Topbar menu
    Route::get('edit-topbar', [TopbarController::class, 'edittopbar'])->name('admin.edittopbar');
    Route::patch('update-top-bar', [TopbarController::class, 'updatetopbar'])->name('admin.updatetopbar');

    //Main menu
    Route::get('edit-menu', [MenuController::class, 'editmenu'])->name('admin.editmenu');
    Route::patch('update-menu', [MenuController::class, 'updatemenu'])->name('admin.updatemenu');


    //Social media
    Route::get('edit-social-media', [SocialmediaController::class, 'editsocialmedia'])->name('admin.editsocialmedia');
    Route::patch('update-social-media', [SocialmediaController::class, 'updatesocialmedia'])->name('admin.updatesocialmedia');

    //Category
    Route::get('create-category', [CategoryController::class, 'createcategory'])->name('admin.createcategory');
    Route::post('create-category', [CategoryController::class, 'savecategory'])->name('admin.savecategory');
    Route::get('show-category', [CategoryController::class, 'showcategory'])->name('admin.showcategory');
    Route::post('edit-category/{id}', [CategoryController::class, 'editcategory'])->name('admin.editcategory');
    Route::put('update-category/{id}', [CategoryController::class, 'updatecategory'])->name('admin.updatecategory');

    //Post
    Route::get('show-post', [PostController::class, 'showpost'])->name('admin.showpost'); //All users would be able to see post list on dasbboard
    Route::get('create-post', [PostController::class, 'createpost'])->middleware('usertype')->name('admin.createpost');
    Route::post('save-post', [PostController::class, 'savepost'])->middleware('usertype')->name('admin.savepost');
    Route::post('edit-post/{id}', [PostController::class, 'editpost'])->middleware('usertype')->name('admin.editpost');
    //Route::patch('update-post/{id}', [PostController::class, 'editpost'])->middleware('usertype')->name('admin.editpost');

    //Ad
    Route::get('edit-ad', [AdController::class, 'editad'])->name('admin.editad');
    Route::patch('update-ad', [AdController::class, 'updatead'])->name('admin.updatead');
    
    //Website info
    Route::get('edit-website-info', [WebsiteInfoController::class, 'editwebsiteinfo'])->name('admin.editwebsiteinfo');
    Route::patch('update-website-info', [WebsiteInfoController::class, 'updatewebsiteinfo'])->name('admin.updatewebsiteinfo');

    //Theme
    //To discuss the theme resourses
    //Route::get('showtheme', [ThemeController::class, 'showtheme'])->name('admin.showtheme');
    //Route::get('createtheme', [ThemeController::class, 'createtheme'])->name('admin.createtheme');
    //And also choose/activate theme


    //Route::patch('edittheme', [ThemeController::class, 'edittheme'])->name('admin.edittheme');
    //Route::post('deletetheme', [ThemeController::class, 'deletetheme'])->name('admin.deletetheme');
});

//Route::get('/admin/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/admin/forget-password', function(){
    return view('welcome');
});
