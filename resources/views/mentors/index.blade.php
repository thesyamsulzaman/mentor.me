@extends('layouts.app')


@section('content')
  <section
    class="hero relative bg-cover h-full py-20 flex sm:items-start xl:items-start justify-center flex-col"
    style="background-image: url('{{ asset('images/backgroundOverlayed.jpg') }}'); height: 400px;"
  >
    <div class="container mx-auto">
      <div class="px-3 flex justify-center">
        <form class="w-full max-w-lg bg-soft-white py-3 px-3 rounded">

          <h1 class="text-bold block text-2xl">Search for Mentors</h1>

          <div class="input-container md:flex md:items-center">
            <div class="form-group">
              <input
                class="form-control"
                type="text"
                placeholder="eg. Business analyst, Data Engineer"
              />
            </div>

            <div class="form-group relative w-full md:w-64 md:ml-2">
              <select class="form-control">
                <option>Software Engineer</option>
                <option>Business Analyst</option>
                <option>Lawyer</option>
                <option>Public Speaking</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <input class="btn btn-black btn-block" type="submit" value="Search" />
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="mentors relative bg-soft-white py-3 relative">
    <div class="container mx-auto">
      <div
        class="card-container py-3 grid grid-cols-1 gap-3 items-center md:grid-cols-2 lg:grid-cols-3"
      >
        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img"
            src="assets/img/mentor1.jpg"
            width="450"
            height="300"
            alt=""
            loading="lazy"
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a class="card-title text-bold text-xl"
              >Teach you to how to become a Freelance Software Developer</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                loading="lazy"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Rachel Green</p>
                <p class="block text-xs text-gray-800">techsolve.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img"
            loading="lazy"
            src="assets/img/mentor2.jpg"
            width="450"
            height="300"
            alt=""
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a
              href="detail.html"
              class="card-title text-bold text-xl underline"
              >Teach you step by step to get a Remote Job as a Software
              Engineer</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Ross Geller</p>
                <p class="block text-xs text-gray-800">techdino.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img h-34"
            loading="lazy"
            src="assets/img/mentor3.jpg"
            alt=""
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a class="card-title text-bold text-xl"
              >Teach you to be a job ready Frontend Engineer</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Chandler Bing</p>
                <p class="block text-xs text-gray-800">sarcastech.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img h-34"
            loading="lazy"
            src="assets/img/mentor4.jpg"
            alt=""
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a class="card-title text-bold text-xl"
              >Teach you how to Land a job in Big Tech Company / FAANG</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Rachel Green</p>
                <p class="block text-xs text-gray-800">techsolve.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img h-34"
            loading="lazy"
            src="assets/img/mentor5.jpg"
            alt=""
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a class="card-title text-bold text-xl"
              >Teach you to how to build a Production Ready, all-in-one
              Automation Software</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, sed do enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Rachel Green</p>
                <p class="block text-xs text-gray-800">techsolve.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card bg-white shadow-xl rounded mx-2">
          <img
            class="card-img h-34"
            loading="lazy"
            src="assets/img/mentor6.jpg"
            alt=""
          />
          <div class="card-body">
            <span class="badge text-xs bg-gray-300">#software-engineer</span>
            <a class="card-title text-bold text-xl"
              >Teach you to do Networking as a Developer</a
            >
            <span class="card-text text-bold text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam ...
            </span>
            <div class="mt-4 flex items-center">
              <img
                class="inline-block h-10 w-10 rounded-full object-cover"
                src="assets/img/user.jpg"
                alt=""
              />
              <div class="inline-block mx-4 leading-tight">
                <p class="block text-sm">Rachel Green</p>
                <p class="block text-xs text-gray-800">techsolve.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="pagination p-2 bg-soft-white flex justify-center items-center">
    <a class="text-soft-white bg-black p-2 mx-1 rounded" href="">1</a>
    <a class="text-soft-white bg-space-black p-2 mx-1 rounded" href="">2</a>
    <a class="text-soft-white bg-space-black p-2 mx-1 rounded" href="">3</a>
    </div>


@endsection
