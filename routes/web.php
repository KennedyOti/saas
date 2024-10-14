<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticatedMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Models\User;


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
        $users = User::all();
        return view('dashboard.index',compact('users'));
    })->name('dashboard');
    Route::get('/edit-user/{id}', [DashboardController::class, 'edit'])->name('user.edit');
    Route::post('/update-user/{id}', [DashboardController::class, 'update'])->name('user.update');

    //app
    Route::match(['get', 'post'], '/apps', [AppController::class, 'apps'])->name('app.index');
});


