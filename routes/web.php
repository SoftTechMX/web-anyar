<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreguntaFrecuenteController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventController;

Auth::routes();

Route::get('/',             [HomeController::class, 'landing'])->name('root');
Route::get('/landing',      [HomeController::class, 'landing'])->name('landing');
Route::get('/index',        [HomeController::class, 'landing'])->name('index');
Route::get('/home',         [HomeController::class, 'landing'])->name('home');
Route::get('/buy',          [HomeController::class, 'buy'])->name('buy-template');
Route::get('/details',      [HomeController::class, 'details']);
Route::get('/blog',         [HomeController::class, 'blog']);
Route::get('/blog-single',  [HomeController::class, 'blog_single']);


Route::resource('calendar', CalendarController::class);
Route::resource('events', EventController::class);
Route::resource('pregunta-frecuente', PreguntaFrecuenteController::class);