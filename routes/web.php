<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserPostController;
use Laravel\Socialite\Facades\Socialite;



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
Route::group(['namespace' => 'User'],function(){
    Route::get('/',[HomeController::class,'index']);
    Route::get('posts/{slug?}',[UserPostController::class,'index'])->name('posts');
});




//Admin Routes



Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin.home');
Route::resource('admin/post',PostController::class);
Route::resource('admin/category',CategoryController::class);
Route::resource('admin/user',UserController::class);

//admin auth routes


Route::fallback(function(){
    return view('errors.404');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

 

/**
 * Route::group(['namespace' => 'Admin'],function(){
 *     Admin Auth Routes
 * 	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
 * 	Route::post('admin-login', 'Auth\LoginController@login');
 * });
 * 

 */
/**Route::post('admin/post/create',[AdminHomeController::class,'create']);

Route::group(['namespace' => 'Admin'],function(){
	Users Routes
});
*/


// Route::get('user',[AuthorController::class,'data']);
// Route::get('data',[AuthorController::class,'showData']);
// Route::get('login',[AuthController::class,'authUsers']);


