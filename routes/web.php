<?php

use App\Http\Controllers\Post\IndexController;
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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');
    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
});

Route::group(['namespace' => '\App\Http\Controllers\Admin\Post','middleware'=>'admin'], function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/axios/test', [App\Http\Controllers\AxiosController::class, '__invoke']);
