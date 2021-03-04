@extends('layouts.app')

@section('content')
    <section
      class="login bg-soft-white h-screen flex flex-row items-start justify-center mt-5"
    >
      <div class="container md:max-w-md">
        <form class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4">
          <h1 class="mb-6 text-semibold text-center text-4xl">Login</h1>
          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="username"
            >
              Username
            </label>
            <input
              class="form-control"
              id="username"
              type="text"
              placeholder="Username"
            />
          </div>
          <div class="form-group">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="password"
            >
              Password
            </label>
            <input
              class="form-control"
              id="password"
              type="password"
              placeholder="******************"
            />
            <!--<p class="text-red-500 text-xs italic">Please choose a password.</p>-->
          </div>
          <div class="my-3">
            <button class="btn btn-black btn-block" type="button">
              Sign In
            </button>
          </div>
        </form>
      </div>
    </section>

@endsection
