<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;

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

Route::get('/contact', function () {
   return view('pages.contact');
});

//To Home Page
Route::get('/', [PagesController::class, 'index'])->name('pages.index');

//To Posts  Page
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

//To Create  a Post
Route::get('/posts/create-post', [PostsController::class, 'create']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
