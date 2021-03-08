@include('components.navbar')
@extends('layouts.app')

@section('title')
  MENTOR.ME | Login
@endsection

@section('content')
    <section
      class="login bg-soft-white h-auto flex flex-row items-start justify-center mt-5 py-12"
    >
      <div class="container md:max-w-md">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-lg rounded px-6 pt-6 pb-8 md:my-4 mt-3">
          <div class="mb-6">
            <h1 class="text-semibold text-center text-4xl">Login</h1>
          </div>

          @if(session('status')) 
            <div class="bg-red-500 rounded-md">
              <div class="px-5 py-3">
                <p class="text-white">
                  {{ session('status')}}
                </p>
              </div>
            </div>
          @endif

          <div class="form-group">
            @csrf
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

          <div class="form-group flex items-center">
            <input type="checkbox" name="remember">
            <label class="ml-2">Remember me</label>
          </div>

          <div class="mt-4">
            <input type="submit" value="Login" class="btn btn-black btn-block"/>
          </div>
        </form>
      </div>
    </section>

@endsection
