<!doctype html>
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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div id="app">
        @auth
            <nav class="border-b border-gray-300 bg-gray-300 px-4 py-6">
                <div class="container mx-auto flex justify-between">
                    <h1 class="font-bold">Dashboard</h1>
                    <form id="logout-form" action="{{ route('logout') }}" class="text-right" method="POST">
                        @csrf
                        <button type="submit" class="logout">Logout</button>
                    </form>
                </div>
            </nav>
        @endauth
        <div class="container mx-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>
