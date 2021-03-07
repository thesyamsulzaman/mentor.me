<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index() {
		return view('auth.login');
	}

	public function store(Request $request) {

		$this->validate($request, [
			'username' => 'required',
			'password' => 'required',
		]);

		if (!auth()->attempt($request->only('username', 'password'))) {
			return back()->with('status', 'Wrong username or password');
		}

		return redirect('/admin');






	}
}
