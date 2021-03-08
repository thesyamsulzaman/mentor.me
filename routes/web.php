<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MentorsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\{
	LogoutController,
	LoginController,
	RegisterController,
};


Route::resource('admin',AdminController::class);

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/mentors', function() { return view('mentors.index'); });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');



