  <header class="sticky py-1 inset-x-0 top-0 z-50 bg-space-black">
    <nav
      class="container mx-auto max-w-container flex flex-col md:flex-row md:justify-between md:items-center"
    >
      <div class="px-8 my-2 flex items-center justify-between">
        <a href="/">
          <img src="{{ asset('icons/logoicon.png') }}" width="120" alt="" />
        </a>
        <div>
          <button
            type="button"
            class="block md:hidden focus:outline-none hover:text-gray-500"
            id="hamburger"
          >
            <img src="{{ asset('icons/hamburger.png')}}" alt="" />
          </button>
        </div>
      </div>

      <div class="dropdown px-5 pb-3 hidden md:pb-0 md:flex md:block" id="menu">
        <a
          href="about.html"
          class=" py-2 px-3 block text-white rounded hover:bg-gray-900"
          >About</a
        >
        <a
          href="/mentors"
          class=" py-2 px-3 block text-white rounded hover:bg-gray-900"
          >Browse Mentors</a
        >
        <a
          href="./login.html"
          class="py-2 px-3 block text-white rounded hover:bg-gray-900"
          >Login</a
        >
        <a
          href="./signup.html"
          class=" py-2 px-3 block text-white rounded hover:bg-gray-900"
          >Signup</a
        >
      </div>
    </nav>
    </header>
