  <header class="sticky py-1 inset-x-0 top-0 z-50 bg-space-black">
    <nav
      class="container mx-auto max-w-container flex flex-col md:flex-row md:items-center">

      <div class="my-2 flex items-center justify-between">
        <a href="/">
          <img src="{{ asset('icons/logoicon.png') }}" width="120" alt="" />
        </a>
        <div>
          <button
            type="button"
            class="block md:hidden focus:outline-none hover:text-gray-500"
            id="hamburger">

            <img src="{{ asset('icons/hamburger.png')}}" alt="" />
          </button>
        </div>
      </div>

      <div class="dropdown px-5 pb-3 hidden md:pb-0 md:flex-1 md:flex" id="menu">
        <a
          href="/admin/dashboard"
          class="py-2 px-3 block text-white rounded hover:bg-gray-900 {{ Request::is('admin/dashboard') ? 'bg-gray-900' : ''  }}">
          Dashboard
        </a>

        <a
          href="/admin/gigs"
          class="py-2 px-3 block text-white rounded hover:bg-gray-900 {{ Request::is('admin/gigs') ? 'bg-gray-900' : ''  }}">
          Gigs
        </a>

        @if (auth()->user()->is_admin == '1')
          <a
            href="/mentors"
            class=" py-2 px-3 block text-white rounded hover:bg-gray-900">
            Mentors
          </a>
        @endif

        @auth
        <div class="flex md:ml-auto">
          <a href="#" class="py-2 px-3  block text-white rounded hover:bg-gray-900">
            Hi, {{ Auth::user()->first_name }}
          </a>
          <a href="{{ route('logout') }}" class="py-2 px-3  block text-white rounded hover:bg-gray-900">
            Logout
          </a>
        </div>
        @endauth

        
      </div>
    </nav>
  </header>
