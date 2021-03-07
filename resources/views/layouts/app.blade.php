<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', "MENTOR.ME | Keeping you to be on track")</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @yield('content')
    
{{--   <footer
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
 --}}
   <script src="{{ asset('js/script.js')}}"></script>
  </body>
</html>
