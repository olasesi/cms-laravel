<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopbarController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\SocialLikeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\WebsiteInfoController;
use App\Http\Controllers\QuickLinkController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\PostTypeSingleController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\AuthorController;


use App\Mail\ForgetPassword;

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

//HomePage
Route::get('/', [HomeController::class, 'index'])->name('user.index');
//All posts
Route::get('/posts', [PostPageController::class, 'index'])->name('postpage.index');
//Single post category
Route::get('/show-single-category/{id}', [PostTypeSingleController::class, 'showsinglecategory'])->name('showsinglecategory');
//Single post
Route::get('/show-single-post/{id}', [SinglePostController::class, 'showsinglepost'])->name('showsinglepost');
//Single author
Route::get('/show-author/{id}', [AuthorController::class, 'showauthor'])->name('showauthor');


//Admin
Route::get('/admin/login', [AdminLoginController::class, 'index'])->middleware('alreadyloggin')->name('admin.index');
Route::post('/admin/login', [AdminLoginController::class, 'savelogin'])->middleware('alreadyloggin')->name('admin.savelogin');



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

    //Social media likes code
    Route::get('edit-social-media-likes-code', [SocialLikeController::class, 'editsociallikes'])->name('admin.editsociallikes');
    Route::patch('update-social-media-likes-code', [SocialLikeController::class, 'updatesociallikes'])->name('admin.updatesociallikes');


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
    // Route::patch('update-ad', [AdController::class, 'updatead2'])->name('admin.updatead2');
    // Route::patch('update-ad', [AdController::class, 'updatead2'])->name('admin.updatead3');
    // Route::patch('update-ad', [AdController::class, 'updatead2'])->name('admin.updatead4');

    //Website info
    Route::get('edit-website-info', [WebsiteInfoController::class, 'editwebsiteinfo'])->name('admin.editwebsiteinfo');
    Route::patch('update-website-info', [WebsiteInfoController::class, 'updatewebsiteinfo'])->name('admin.updatewebsiteinfo');

    //Weather API
    Route::get('show-weather', [OpenWeatherController::class, 'showweather'])->name('admin.showweather');
    Route::patch('show-weather', [OpenWeatherController::class, 'updateweather'])->name('admin.updateweather');

    //Theme
    Route::get('create-theme', [ThemeController::class, 'createtheme'])->name('admin.createtheme');
    Route::get('show-theme', [ThemeController::class, 'showtheme'])->name('admin.showtheme');
    Route::post('save-theme', [ThemeController::class, 'savetheme'])->name('admin.savetheme');
    Route::get('edit-theme/{id}', [ThemeController::class, 'edittheme'])->name('admin.edittheme');
    Route::patch('update-theme/{id}', [ThemeController::class, 'updatetheme'])->name('admin.updatetheme');
    Route::patch('activate-theme/{id}', [ThemeController::class, 'activatetheme'])->name('admin.activatetheme');
    Route::delete('delete-theme/{id}', [ThemeController::class, 'deletetheme'])->name('admin.deletetheme');
    


    //Quicklinks
    Route::get('editquicklink', [QuickLinkController::class, 'editquicklink'])->name('admin.editquicklink');
    Route::patch('updatequicklink', [QuickLinkController::class, 'updatequicklink'])->name('admin.updatequicklink');

});

Route::get('/admin/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->middleware('alreadyloggin')->name('admin.forgetpassword');
Route::post('/admin/save-forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->middleware('alreadyloggin')->name('admin.saveforgetpassword');
// Route::get('/admin/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->middleware('alreadyloggin')->name('admin.showresetpassword');
Route::post('/admin/save-reset-password/', [ForgotPasswordController::class, 'submitResetPasswordForm'])->middleware('alreadyloggin')->name('admin.saveresetpassword');
Route::get('/admin/reset-password/{token}', [ForgotPasswordController::class, 'createresetpasswordform'])->name('admin.resetpassword'); 


//search post
Route::get('/admin/search-post/{id}', [PostController::class, 'searchpost'])->middleware('alreadyloggin')->name('admin.searchpost');



// Route::get('/admin/forget-password', function(){
//     return view('welcome');
// });



Route::get('/email', function(){
return new ForgetPassword();
});
