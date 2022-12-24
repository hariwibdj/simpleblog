<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/user',[HomeController::class,'viewuser']);

Route::get('/login',[LoginController::class,'showLoginForm']);
Route::post('/login',[LoginController::class,'authentification'])->name('login');

Route::get('/posts',[PostController::class,'index']);

