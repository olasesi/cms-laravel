<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');




Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/menu', [DashboardController::class, 'menu']);





Route::prefix('admin')->group(function () {
    Route::get('users', [AdminLoginController::class, 'showusers']);
   //Route::post('edit-user/{id}', [AdminLoginController::class, 'edituser']);
    Route::get('login', [AdminLoginController::class, 'index']);
    Route::post('login', [AdminLoginController::class, 'savelogin']);
    Route::get('logout', [AdminLoginController::class, 'logout']);
    Route::get('add-user', [AdminLoginController::class, 'createuser']);
    Route::post('add-user', [AdminLoginController::class, 'saveuser']);
    Route::post('edit-user/{id}', [AdminLoginController::class, 'edituser']);
    Route::put('update-user/{id}', [AdminLoginController::class, 'updateuser']);
    Route::post('delete-user/{id}', [AdminLoginController::class, 'deleteuser']);
    Route::put('ban-user/{id}', [AdminLoginController::class, 'banuser']);
});

//Route::get('/admin/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/admin/forget-password', function(){
    return view('welcome');
});
