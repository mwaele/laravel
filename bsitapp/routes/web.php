<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/welcome', function () {
    return view('welcome');
    //return 'Hello World';
    //return view('pages.index');
});

/*
Route::get('/hello', function () {
    return 'Hello World!!';
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::get('/header', [App\Http\Controllers\PagesController::class, 'header']);

Route::get('/hero', [App\Http\Controllers\PagesController::class, 'hero']);

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);

Route::get('/portfolio', [App\Http\Controllers\PagesController::class, 'portfolio']);

Route::get('/Faq', [App\Http\Controllers\PagesController::class, 'Faq']);

Route::get('/team', [App\Http\Controllers\PagesController::class, 'team']);

Route::get('/clients', [App\Http\Controllers\PagesController::class, 'clients']);

Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);

Route::get('/footer', [App\Http\Controllers\PagesController::class, 'footer']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
