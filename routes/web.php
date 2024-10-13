<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;


//auth
Route::get('/register', [HomeController::class, 'registerForm'])->name('register');
Route::get('/login', [HomeController::class, 'loginForm'])->name('login');


// front
Route::get('/', function () {
    return view('home.index');
});

Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
