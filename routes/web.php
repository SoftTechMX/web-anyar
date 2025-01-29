<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\FrequentlyAskedQuestionController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/',             [HomeController::class, 'landing'])->name('root');
Route::get('/landing',      [HomeController::class, 'landing'])->name('landing');
Route::get('/index',        [HomeController::class, 'landing'])->name('index');
Route::get('/home',         [HomeController::class, 'landing'])->name('home');
Route::get('/plans',        [HomeController::class, 'plans'])->name('plans');
Route::get('/buy',          [HomeController::class, 'buy'])->name('buy');
Route::get('/details',      [HomeController::class, 'details']);
Route::get('/blog-single',  [HomeController::class, 'blog_single']);


Route::resource('frequently-asked-questions', FrequentlyAskedQuestionController::class);
Route::resource('calendar', CalendarController::class);
Route::resource('events', EventController::class);
Route::resource('posts', PostController::class);