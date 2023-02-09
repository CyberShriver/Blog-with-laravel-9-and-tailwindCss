<?php

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

//GET
Route::get('/blog',[PostController::class,'index'])->name('blog.index');
Route::get('/blog/{id}',[PostController::class,'show'])->name('blog.show');

// POST
Route::get('/blog/create',[PostController::class,'create'])->name('blog.create');
Route::post('/blog',[PostController::class,'store'])->name('blog.store');

// PUT OR PATCH
Route::get('/blog/edit/{id}',[PostController::class,'edit'])->name('blog.edit');
Route::patch('/blog/{id}',[PostController::class,'update'])->name('blog.update');

//DELETE
Route::delete('/blog/{id}',[PostController::class,'destroy'])->name('blog.destroy');

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