<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGigController extends Controller
{
	public function index() {
		return view('admin.gigs');
	}

	public function store(Request $request) {
		$this->validate($request, [
			'title' => 'required',
			'body' => 'required'
		]);

		$request->user()->gigs()->create([
			'title' => $request->title,
			'body' => trim($request->body)
		]);

		return back();
	}
}
