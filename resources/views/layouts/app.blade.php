<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div id="app">
    <div class="flex items-center justify-center h-screen">

        <div class="text-white font-bold rounded-lg border shadow-lg p-64" style="background: linear-gradient(90deg, #4fd1c5 0%, #63b3ed 100%)">
            <h2 class="text-4xl">✨ Landing Page coming soon!</h2>
        </div>

    </div>
</div>


<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
