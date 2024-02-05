<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link
        rel="shortcut icon"
        type="image/png"
        href="{{asset('admin/')}}/assets/images/logos/favicon.png"
    />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset('admin/')}}/assets/css/styles.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>DOCTUCH</title>
</head>
<body>
    <div id="app">
        <!-- Preloader -->
        <div class="preloader">
            <img src="{{asset('admin/')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
        </div>
        @yield('content')

        <div class="dark-transparent sidebartoggler"></div>
        <!-- Import Js Files -->
    </div>
    <script src="{{asset('admin/')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('admin/')}}/assets/js/app.min.js"></script>
    <script src="{{asset('admin/')}}/assets/js/app.init.js"></script>
    <script src="{{asset('admin/')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin/')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="{{asset('admin/')}}/assets/js/sidebarmenu.js"></script>
    <script src="{{asset('admin/')}}/assets/js/theme.js"></script>
</body>
</html>
