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


Route::get('/posts', [PostController::class,'index']);
//array have two items controller class name and name of action  instead of closure function
//function () { } 
// :: => scope resolution => +namespaces
    
Route::get('/posts/create', [PostController::class,'create']);