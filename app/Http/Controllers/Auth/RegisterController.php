<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

use App\Models\User;


class RegisterController extends Controller
{
  public function index() 
  {
    return view('auth.register');
  }

  public function store(Request $request) {


    $this->validate($request, [
      'first_name' => 'required|max:255',
      'last_name' => 'required|max:255',
      'username' => 'required|max:10',
      'email' => 'required|email|max:255',
      'password' => 'required|confirmed'
    ]);

    User::create([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    auth()->attempt($request->only('email', 'password'));

    return redirect('/');


  }
}
