<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{url('./assets/vendor/nucleo/css/nucleo.css ')}}" rel="stylesheet">
  <link href="{{url('./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{url('./assets/css/argon.css')}}" rel="stylesheet">
</head>
<div id="app">
    @include ('layouts.partials._navigation')


    <main>
        <div class="container">
            <div class="row row justify-content-center">

                <div class="col-md-2 mt-3">
                    @include('layouts.partials._sport_menu')
                </div>

                    @yield('content')

                <div class="col mt-3">
                    @include('layouts.partials._bet_slip')
                </div>

            </div>
        </div>
    </main>

        @include ('layouts.partials._footer') 
</div>

        @include('layouts.partials._footer_scripts') 
</body>
</html>
