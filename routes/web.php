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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/about', [App\Http\Controllers\PagesController::class,'about'])->name('About');

Route::get('/index', [App\Http\Controllers\PagesController::class,'index'])->name('index');

Route::get('', [App\Http\Controllers\PagesController::class,'index'])->name('index');

//Route::resource('posts', 'App\Http\Controllers\PostController');

Route::get('/posts', [App\Http\Controllers\PostController::class,'index']);

Route::post('/posts/create', [App\Http\Controllers\PostController::class,'store'])->middleware('auth');

Route::get('/posts/create', [App\Http\Controllers\PostController::class,'create'])->name("create")->middleware('auth');

Route::get('/posts/{id}', [App\Http\Controllers\PostController::class,'show'])->name("show");

Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class,'destroy'])->middleware('auth');

Route::get('/posts/{id}', [App\Http\Controllers\PostController::class,'edit'])->middleware('auth');


