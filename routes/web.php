<?php

use Illuminate\Support\Facades\Route;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PagesController::class,'about'])->name('About');

Route::get('/index', [App\Http\Controllers\PagesController::class,'index'])->name('index');

Route::get('', [App\Http\Controllers\PagesController::class,'index'])->name('index');

//Route::resource('posts', 'App\Http\Controllers\PostController');

Route::get('/posts', [App\Http\Controllers\PostController::class,'index']);

Route::post('/posts/create', [App\Http\Controllers\PostController::class,'store']);

Route::get('/posts/create', [App\Http\Controllers\PostController::class,'create']);

Route::get('/posts/{id}', [App\Http\Controllers\PostController::class,'show']);

Route::get('/posts/{id}', [App\Http\Controllers\PostController::class,'edit']);

Route::get('/posts/{id}', [App\Http\Controllers\PostController::class,'destroy']);

