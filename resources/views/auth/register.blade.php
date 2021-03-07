@include('components.navbar')
@extends('layouts.app')

@section('title')
  MENTOR.ME | Register
@endsection


@section('content')
    <section
      class="signup bg-soft-white h-screen flex flex-row items-start justify-center mt-2"
    >
      <div class="container md:max-w-md">

        <form action="{{ route('register') }}" method="POST" class="bg-white shadow-lg rounded px-6 pt-6 pb-8 md:my-4 mt-3">
          @csrf
          <div class="mb-6">
            <h1 class="text-semibold text-center text-4xl">Signup</h1>
          </div>
          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="first_name"
            >
              First Name
            </label>
            <input
              class="form-control @error('first_name') border-2 border-red-600 @enderror"
              id="first_name"
              name="first_name"
              type="text"
              placeholder="First Name"
              value="{{ old('first_name') }}"
            />
            @error('first_name')
               <p class="text-red-500 text-xs mt-1">
                {{ $message }}
               </p>
            @enderror
          </div>

          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="last_name"
            >
              Last Name
            </label>
            <input
              class="form-control @error('last_name') border-2 border-red-600 @enderror"
              id="last_name"
              name="last_name"
              type="text"
              placeholder="Last Name"
              value="{{ old('last_name') }}"

            />

            @error('last_name')
               <p class="text-red-500 text-xs mt-1">
                {{ $message }}
               </p>
            @enderror
          </div>

          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="username"
            >
              Username
            </label>
            <input
              class="form-control @error('username') border-2 border-red-600 @enderror"
              id="username"
              name="username"
              type="text"
              placeholder="Username"
              value="{{ old('username') }}"

            />

            @error('username')
               <p class="text-red-500 text-xs mt-1">
                {{ $message }}
               </p>
            @enderror
          </div>

          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="email"
            >
              Email
            </label>
            <input
              class="form-control @error('email') border-2 border-red-600 @enderror"
              name="email"
              id="email"
              type="email"
              placeholder="Email"
              value="{{ old('email') }}"

            />

            @error('email')
               <p class="text-red-500 text-xs mt-1">
                {{ $message }}
               </p>
            @enderror
          </div>

          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="password"
            >
              Password
            </label>
            <input
              class="form-control @error('password') border-2 border-red-600 @enderror"
              id="password"
              type="password"
              name="password"
              placeholder="******************"
            />

            @error('password')
               <p class="text-red-500 text-xs mt-1">
                {{ $message }}
               </p>
            @enderror
          </div>
          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="password"
            >
              Confirm Password
            </label>
            <input
              class="form-control"
              id="password_confirmation"
              type="password"
              name="password_confirmation"
              placeholder="******************"
            />
            <!--<p class="text-red-500 text-xs italic">Please choose a password.</p>-->
          </div>
          <div class="form-group flex items-center">
            <input type="checkbox" name="is_mentor">
            <label class="ml-2">Register as mentor</label>
          </div>
          <div class="mt-4">
            <input type="submit" value="Register" class="btn btn-black btn-block"/>
          </div>
        </form>
      </div>
    </section>

@endsection
