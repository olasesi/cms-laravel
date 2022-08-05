<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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
Route::get('/admin/menu', [DashboardController::class, 'menu']);


//

Route::get('/admin/login', [AdminLoginController::class, 'index'])->middleware('alreadyloggin')->name('admin.index');
Route::post('/admin/login', [AdminLoginController::class, 'savelogin'])->name('admin.savelogin');

Route::group(['prefix'=>'admin', 'middleware'=>'isadmin'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [AdminLoginController::class, 'showusers'])->name('admin.show');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('add-user', [AdminLoginController::class, 'createuser'])->name('admin.create');
    Route::post('add-user', [AdminLoginController::class, 'saveuser'])->name('admin.save');
    Route::post('edit-user/{id}', [AdminLoginController::class, 'edituser'])->name('admin.edit');
    Route::put('update-user/{id}', [AdminLoginController::class, 'updateuser'])->name('admin.update');
    Route::post('delete-user/{id}', [AdminLoginController::class, 'deleteuser'])->name('admin.delete');
    Route::put('ban-user/{id}', [AdminLoginController::class, 'banuser'])->name('admin.ban');
    
    //Category
    Route::get('create-category', [CategoryController::class, 'createcategory'])->name('admin.createcategory');
    Route::post('create-category', [CategoryController::class, 'savecategory'])->name('admin.savecategory');
    Route::get('show-category', [CategoryController::class, 'showcategory'])->name('admin.showcategory');
});

//Route::get('/admin/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/admin/forget-password', function(){
    return view('welcome');
});
