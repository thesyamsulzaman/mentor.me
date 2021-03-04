<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('mentors',MentorsController::class);
Route::resource('admin',AdminController::class);


Route::get('/', function () {
  $categories = array(
  	'categories' => [[
  		'text' => 'Lawyer', 
  		'link' => '/lawyer',
  		'image' => 'icons/Law.svg',
  		'desc' => 'nostrud exercitation ullamco laboris nisi ut aliquip ex'
  	],
  	[
  		'text' => 'Software Engineering', 
  		'link' => '/software-engineering',
  		'image' => 'icons/code.svg',
  		'desc' => 'ea commodo consequat. Duis aute irure dolor in reprehenderit in'
  	],
  	[
  		'text' => 'Accountant', 
  		'link' => '/accountant',
  		'image' => 'icons/USD.svg',
  		'desc' => 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
  	],
  	[
  		'text' => 'Finance', 
  		'link' => 'finance',
  		'image' => 'icons/Briefcase.svg',
  		'desc' => 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
  	],
  	[
  		'text' => 'Teaming', 
  		'link' => '/teaming',
  		'image' => 'icons/Team.svg',
  		'desc' => 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
  	],
  	[
  		'text' => 'Public Speaking', 
  		'link' => '/public-speaking',
  		'image' => 'icons/Presentation.svg',
  		'desc' => 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
  	],]
  );
  return view('index')->with($categories);
});

