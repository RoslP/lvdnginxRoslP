<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
Route::group(['namespace'=>"App\Http\Controllers\Post",'middleware'=>'jwt.auth'],function (){
    Route::get('/posts', IndexController::class);
    Route::get('/posts/create', CreateController::class);
    Route::post('/posts', StoreController::class);
    Route::get('/posts/{post}', ShowController::class);
    Route::get('/posts/{post}/edit', EditController::class);
    Route::patch('/posts/{post}', UpdateController::class);
    Route::delete('/posts/{post}', DestroyController::class);
});
Route::group(['namespace'=>"App\Http\Controllers\Person",'prefix'=>'people'],function (){
Route::post('/',StoreController::class);
Route::get('/',IndexController::class);
Route::get('/{person}',ShowController::class);
Route::patch('/{person}',UpdateController::class);
Route::delete('/{person}',DestroyController::class);
});
