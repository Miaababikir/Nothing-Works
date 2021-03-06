<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/419bb783b8.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ mix('css/dashboard.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal font-roboto">
    <div id="app" >

    @include('dashboard.includes.nav')

        <div class="container w-full mx-auto pt-20">

            <div class="w-full px-4 md:px-0 md:py-16 text-gray-800 leading-normal min-h-screen">

                @yield('content')

            </div>
        </div>

    </div>

    @include('dashboard.includes.footer')

    <script src="{{ mix('js/dashboard.js') }}"></script>
</body>
</html>
