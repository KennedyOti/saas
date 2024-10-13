<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticatedMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AppController;


//auth
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('user.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



//front
Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

//dashboard
Route::middleware([AuthenticatedMiddleware::class])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    //app
    Route::get('/all-apps', [AppController::class, 'index'])->name('app.index');
    Route::match(['get', 'post'], '/apps', [AppController::class, 'apps']);
});


