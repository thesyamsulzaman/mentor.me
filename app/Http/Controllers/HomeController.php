<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index() {

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
  	],]);

		return view('index', $categories);
	}
}
