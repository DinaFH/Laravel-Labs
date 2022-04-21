<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome'); // load view 
});


Route::get('/posts', [PostController::class,'index'])->name('posts.index');;
//array have two items controller class name and name of action  instead of closure function
//function () { } 
// :: => scope resolution => +namespaces
    
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
// Route::get('/posts/create/test', [PostController::class,'create']); -=> lw 3amalt kda h execute dynamic route brdo
Route::post ('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show'); //dynamic parameter
//Route::get('/posts/{post}/{tag}',[PostController::class,'show']); //dynamic parameter
//Always put routes with dynamic parameters at the end in order to avoid confusion.
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{post}',[PostController::class, 'update'])->name('posts.update');