<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mentor.me | Guide you right</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('components.navbar')
    @yield('content')

   <script src="{{ asset('js/script.js')}}"></script>
  </body>
</html>
