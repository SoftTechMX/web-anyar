<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/',         [HomeController::class, 'landing'])->name('root');
Route::get('/landing',  [HomeController::class, 'landing'])->name('landing');
Route::get('/index',    [HomeController::class, 'landing'])->name('index');
Route::get('/home',     [HomeController::class, 'landing'])->name('home');

Route::get('/details',      [HomeController::class, 'details']);
Route::get('/blog',         [HomeController::class, 'blog']);
Route::get('/blog-single',  [HomeController::class, 'blog_single']);
