<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .tileimage{
        border-radius: 10%;
        padding: 8px;
        border: 5px solid #BDE626;
        background-color:#474747;
    }
</style>
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

    <!-- Styles -->

    <link href="css/app.css" rel="stylesheet">

</head>
<body>

    <div id="app">
        @include('inc/navbar')
        @yield('content')
        @yield('content1')
    </div>



</body>
</html>

