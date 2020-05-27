<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Vdu Games</title>

    <!--  <script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/flickity.css')}}" media="screen">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100" >

    <div id="app">
        <div class="wrapper flex-grow-1">
            @include('inc/navbar')
            @yield('content')
            @yield('content1')
        </div>

    </div>
    @include('inc/footer')

    <script src="{{asset('css/flickity.pkgd.min.js')}}"></script>
</body>
</html>

