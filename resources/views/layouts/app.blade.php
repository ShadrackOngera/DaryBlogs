<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/AdminLTE.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>



</head>
<body>
    <div id="app">

        <div>
            @include('partials.nav')
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div>
        @include('partials.footer')
    </div>
</body>
</html>
