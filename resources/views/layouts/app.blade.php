<!DOCTYPE html>
<html lang="en">
    <head>
        <title> {{ __('laravel quickstart - basic') }}</title>

        <link href="{{ asset('bower_components/fontawesome/css/brands.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/fontawesome/css/solid.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script href="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
        <script href="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script href="{{ asset('bower_components/popper.js/dist/umd/popper.js') }}"></script>
    </body>
</html>
