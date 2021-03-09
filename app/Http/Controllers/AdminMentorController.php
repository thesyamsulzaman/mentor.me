<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMentorController extends Controller
{
	public function index() {
		return view('admin.mentors');
	}
}
