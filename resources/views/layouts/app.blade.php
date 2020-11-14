<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/laravel.css') }}">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/d2fde4ffab.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="antialiased">
      @yield('body')
      <footer class="mt-2 text-center text-white-75">
        <p>All rights reserved.</p>
      </footer>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>