<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MentorsController;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminGigController;

use App\Http\Controllers\Auth\{
	LogoutController,
	LoginController,
	RegisterController,
};



Route::group([
	'name' => 'admin.',
	'prefix' => 'admin',
	'middleware' => 'auth'
], function() {
		Route::get('dashboard', [AdminDashboardController::class, 'index']);

		//
		Route::get('gigs', [AdminGigController::class, 'index']);
		Route::post('gigs', [AdminGigController::class, 'store']);

		//
		Route::get('mentors', [AdminGigController::class, 'index']);
	} 
);


Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/mentors', function() { return view('mentors.index'); });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');



