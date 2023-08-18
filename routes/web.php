<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
    return view('homepage', [
        'title' => 'Homepage',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/article', [PostController::class, 'index']);

Route::get('/article/{post:slug}', [PostController::class, 'get']);

Route::get('/category/{category:slug}', [CategoryController::class, 'index']);

Route::get('/author/{user:username}', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('dashboard/post/createSlug', [DashboardPostController::class, 'generateSlug'])->middleware('auth');

Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');

