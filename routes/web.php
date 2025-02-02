<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\FrequentlyAskedQuestionController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuscriptorsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UiController;

Auth::routes();

Route::get('/',             [HomeController::class, 'landing'])->name('root');
Route::get('/landing',      [HomeController::class, 'landing'])->name('landing');
Route::get('/index',        [HomeController::class, 'landing'])->name('index');
Route::get('/home',         [HomeController::class, 'landing'])->name('home');
Route::get('/plans',        [HomeController::class, 'plans'])->name('plans');
Route::get('/buy',          [HomeController::class, 'buy'])->name('buy');
Route::get('/details',      [HomeController::class, 'details']);
Route::get('/blog-single',  [HomeController::class, 'blog_single']);
Route::get('/dashboard',    [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/my-profile',   [HomeController::class, 'user_profile'])->name('user.profile');
Route::get('/settings',     [HomeController::class, 'user_settings'])->name('user.settings');
Route::get('/cpanel',       [HomeController::class, 'cpanel'])->name('cpanel');

Route::get('/app-settings', [UiController::class, 'index'])->name('app-settings.index');
Route::post('/settings-save', [UiController::class, 'settings_save'])->name('app-settings.save');

Route::resource('frequently-asked-questions', FrequentlyAskedQuestionController::class);
Route::post('/frequently-asked-questions/search', [FrequentlyAskedQuestionController::class, 'search'])->name('frequently-asked-questions.search');

Route::resource('suscriptors', SuscriptorsController::class);
Route::post('/suscriptors/search', [SuscriptorsController::class, 'search'])->name('suscriptors.search');

Route::resource('users', UsersController::class);
Route::post('/users/search', [UsersController::class, 'search'])->name('users.search');

Route::resource('calendar', CalendarController::class);
Route::post('/calendar/search', [CalendarController::class, 'search'])->name('calendar.search');

Route::resource('event', EventsController::class);
Route::post('/event/search', [EventsController::class, 'search'])->name('event.search');

Route::resource('posts', PostsController::class);
Route::post('/posts/search', [PostsController::class, 'search'])->name('post.search');

Route::resource('contact-requests', ContactRequestController::class);
Route::post('/contact-requests/search', [ContactRequestController::class, 'search'])->name('contact-requests.search');

Route::resource('services', ServicesController::class);
Route::post('/services/search', [ServicesController::class, 'search'])->name('services.search');

Route::resource('products', ProductsController::class);
Route::post('/products/search', [ProductsController::class, 'search'])->name('products.search');

Route::get('/version',      [HomeController::class, 'version'])->name('version');