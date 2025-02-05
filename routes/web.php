<?php

use App\Http\Controllers\PostController;
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

Auth::routes();

//Route::get('/{page}', [App\Http\Controllers\IndexController::class,'__invoke'])->where('page','.*');
//Route::post('/posts',[PostController::class,'store']);
Route::get('/',PostController::class.'@index');
Route::get('/{id}',PostController::class.'@show');
