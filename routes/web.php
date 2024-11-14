<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about',[AboutController::class,'index'])->name('about.index');

Route::get('/posts', [PostsController::class,'index'])->name('post.index');
Route::post('/posts', [PostsController::class,'store'])->name('post.store');
Route::get('/posts/create', [PostsController::class,'create'])->name('post.create');
Route::get('/posts/{post}', [PostsController::class,'show'])->name('post.show');
Route::get('posts/{post}/edit',[PostsController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostsController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}',[PostsController::class,'destroy'])->name('post.delete');

Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete');
Route::get('/posts/restore', [PostsController::class, 'restore']);
Route::get('/posts/first_or_create', 'App\Http\Controllers\PostsController@firstOrCreate');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');



