<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RangkingController;
use App\Http\Controllers\UserArticleController;
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

Route::get('/postAdd', function () {
    return view("postAdd");
});

Route::resource('user',UserArticleController::class);

Route::resource('articles', ArticleController::class);

Route::get('/ranking', [RangkingController::class, 'ranking']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

