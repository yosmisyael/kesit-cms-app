<?php

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
    return view('homepage', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/article', function () {
    return view('posts', ['title' => 'Articles']);
});

Route::get('/article/detail', function () {
    return view('article', ['title' => 'article detail']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

Route::get('/user', function () {
    return view('userDashboard', ['title' => 'Dashboard']);
});
