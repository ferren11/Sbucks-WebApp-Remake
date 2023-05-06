<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('name', 'Starbucks') }} || @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Fira-Sans" rel="stylesheet">

    @php
        $color = '';
        if($user->loyaltyStatus == 'Gold') {
            $color = '#C6A961';
        } else {
            $color = '#006F42';
        };
    @endphp

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <style>
        body {
            font-family: "Fira Sans", sans-serif;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
            <div class="container mt-2 ms-3 me-3">
                <div class="logo pb-2">
                    <a class="brand-name" href="{{ route('home') }}" style="text-decoration:none" >STARBUCKS</a>
                </div>
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <div class="greeting">
                        <h5 class="fw-bold">{{ $greeting }}, </h5>
                        <h5 class="fw-bold">{{ $user->name }}</h5>
                    </div>
                    <div class="loyalty-status">
                        <h5>{{ $user->loyaltyStatus }}</h5>
                    </div>
                </div>
                <div class="container d-flex justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('home') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transactions.index') }}">Transaction</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="content mt-3 ms-3 me-3">
        @yield('content')
    </div>

    <footer class="bg-light pt-3">
        <div class="container text-center footer py-2">
            <span class="text-white ">© 2023 Starbucks Coffee Company, All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>
