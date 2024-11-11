<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/about','App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/home', function () {return 'this is home page';});
Route::get('/home2', 'App\Http\Controllers\MyFirstController@index123');
Route::get('/posts', 'App\Http\Controllers\PostsController@index')->name('post.index');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::get('/posts/update', 'App\Http\Controllers\PostsController@update');
Route::get('/posts/delete', 'App\Http\Controllers\PostsController@delete');
Route::get('/posts/first_or_create', 'App\Http\Controllers\PostsController@firstOrCreate');
Route::get('/cars', 'App\Http\Controllers\CarsController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');



