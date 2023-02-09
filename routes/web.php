<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\testController;
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
// default router

Route::get('/',function(){
    return view('welcome');
});

Route::get('/invoke',HomeController::class);

// resource
// Route::resource('/blog',PostController::class);

// prefix

Route::prefix('/blog')->group(function(){

    Route::get('/',[PostController::class,'index'])->name('blog.index');

    Route::get('/{id}',[PostController::class,'show'])->name('blog.show');

    Route::get('/create',[PostController::class,'create'])->name('blog.create');

    Route::post('/',[PostController::class,'store'])->name('blog.store');

    Route::get('/edit/{id}',[PostController::class,'edit'])->name('blog.edit');

    Route::patch('/{id}',[PostController::class,'update'])->name('blog.update');

    Route::delete('/{id}',[PostController::class,'destroy'])->name('blog.destroy');

});

// fallback

Route::fallback(FallbackController::class);

// multiple HTTP verbs
// Route::match(['GET','POST'],'/blog',[PostController::class,'index']);

// using any
// Route::any('/blog',[PostController::class,'index']);

// using view
// Route::view('/blog','blog.index',['author'=>"Patrick shriver"]);

// regular expression
// Route::get('/blog/{id}',[PostController::class,'show'])
// ->where('id','[0-9]+');

// Route::get('/blog/{name}',[PostController::class,'show'])
// ->where('name','[a-z]');

// Route::get('/blog/{name}',[PostController::class,'show'])
// ->whereAlpha('name');

// Route::get('/blog/{id}',[PostController::class,'show'])
// ->whereNumber('id');

// Route::get('/blog/{id}/{name}',[PostController::class,'show'])
// ->whereNumber('id')
// ->whereAlpha('name');