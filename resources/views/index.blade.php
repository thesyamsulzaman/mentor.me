@include('components.navbar')
@extends('layouts.app')

@section('content')
  <section
    class="hero relative bg-cover h-full py-20 flex sm:items-start xl:items-start justify-center flex-col"
    style="background-image: url('{{ asset('images/backgroundOverlayed.jpg') }}'); height: 400px;"
  >
    <div class="container mx-auto">
      <div class="px-8 flex flex-col">
        <h1
          class="text-3xl sm:text-4xl md:text-5xl md:leading-tight font-semibold subpixel-antialiased tracking-wide text-white"
        >
          We keep you <br />
          to be on track
        </h1>
        <form class="flex justify-around bg-white rounded focus:shadow-outline
          w-full max-w-sm mt-4" action="browse.html">
          <img class="ml-3" src="{{ asset('icons/search.svg')}}" alt="" width="20">
          <input
            class="py-3 w-full px-3 focus:outline-none focus:border-space-black"
            type="text"
            placeholder="Explore Mentors"
          />
          <img class="mr-2" src="{{ asset('icons/arrow-right.svg')}}" alt="" width="25">
        </form>
      </div>
    </div>
  </section>

  <section class="category bg-soft-white">
    <div class="container mx-auto">
      <div class="px-8 py-8">
        <h1 class="text-3xl font-bold leading-tight">
          Explore <br />
          by category
        </h1>
      </div>
    </div>

    <div>
      <div
        class="category-cards pb-6 overflow-auto cursor-grabbing xl:overflow-hidden mx-auto mt-5 flex">

        @if(count($categories) > 0)
        	@foreach($categories as $category)
		        <div class="mx-6 hover:bg-white p-3 hover:shadow-md" style="min-width: 200px;" >
		          <img src="{{ asset($category["image"]) }}" class="h-16" alt="" />
		          <div class="mt-4">
		            <span class="font-bold">{{ $category["text"] }}</span>
		            <span class="block font-normal text-gray-700 mt-1">
		            	{{ $category["desc"] }}
		            </span>
		          </div>
		        </div>
        	@endforeach
        @endif


      </div>
    </div>
  </section>

  <section class="explores bg-soft-white pt-5 pb-5">
    <div class="container mx-auto">
      <div class="px-8 pt-5">
        <h1 class="text-3xl font-bold leading-tight">
          Find a mentor <br />
          You will love
        </h1>
      </div>
    </div>

    <div class="container mx-auto">
      <div
        class="mt-3 flex flex-col items-center justify-center align-center md:flex-row md:flex-wrap md:align-center"
      >
        <div
          class="card bg-white p-3 shadow-lg m-2 rounded-md flex-1"
        >
          <span class="text-xs bg-gray-300 px-2 py-1 rounded w-auto"
            >#lawyer</span
          >
          <a href="#" class="text-bold block text-xl py-2"
            >Lawyer your life up</a
          >
          <span class="text-bold block text-gray-700 text-sm py-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor magna aliqua. Ut enim ad minim veniam ...
          </span>
          <span class="inline-block py-2">
            <p class="text-bold text-sm">Jimmy Mcgil</p>
            <p class="text-sm text-gray-600">4 Days ago</p>
          </span>
        </div>

        <div
          class="card bg-white p-3 shadow-md m-2 flex-1"
        >
          <span class="text-xs bg-gray-300 px-2 py-1 rounded w-auto"
            >#finance</span
          >
          <span class="text-bold block text-xl py-2"
            >6 months of Finance immersion</span
          >
          <span class="text-bold block text-gray-700 text-sm py-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua
            consectetur adipisicing elit, sed do eiusmod. Ut enim ad minim
            veniam ...
          </span>
          <span class="inline-block py-2">
            <p class="text-bold text-sm">Monica Ray</p>
            <p class="text-sm text-gray-600">2 Days ago</p>
          </span>
        </div>

        <div
          class="card bg-white p-3 shadow-md m-2 flex-1"
        >
          <span class="text-xs bg-gray-300 px-2 py-1 rounded w-auto"
            >#software-engineer</span
          >
          <span class="text-bold block text-xl py-2"
            >Guide you to becoming a Software Engineer</span
          >
          <span class="text-bold block text-gray-700 text-sm py-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam ...
          </span>
          <span class="inline-block py-2">
            <p class="text-bold text-sm">Rachel Green</p>
            <p class="text-sm text-gray-600">2 Days ago</p>
          </span>
        </div>

        <div class="p-3 m-5" style="max-width: 300px;">
          <span class="text-bold block text-5xl p-5">+256</span>
          <a
            href="./browse.html"
            class="text-bold text-center block underline text-xl"
            >Browse all mentors</a
          >
        </div>
      </div>
    </div>
  </section>


  <section class="testimonials bg-soft-white">
    <div class="container mx-auto">
      <div class="px-8 pt-5">
        <h1 class="text-3xl font-bold block text-left leading-tight">
          People that <br />
          we've helped
        </h1>
      </div>
    </div>

    <div class="container mx-auto"></div>
  </section>


  <footer
    class="mentor mt-5 relative bg-cover h-20 py-5 flex sm:items-start xl:items-start justify-center flex-col"
    style="background-image: linear-gradient(72deg, #2e2e36, #1e1e1e);">

    <div class="container mx-auto flex flex-col items-center">
      <img src="{{ asset('icons/logoicon.png')}}" width="120" alt="" />
      <ul class="flex justify-center text-white mt-2">
        <li><a href="">CONTACT US</a></li>
        <li class="ml-3"><a href="">TERMS & CONDITIONS</a></li>
      </ul>
    </div>

  </footer>

@endsection

