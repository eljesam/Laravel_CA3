<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FossilFiesta') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-mono">
    <div id="app">
        <header class="bg-primary py-6">
            <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-3xl font-semibold text-white no-underline">
                        {{ config('app.name', 'FossilFiesta') }}
                    </a>
                </div>
                <nav class="flex justify-center sm:justify-end items-center space-x-4 text-white text-lg sm:text-xl mt-4 sm:mt-0">
                    <div class="flex flex-wrap justify-center sm:justify-end">
                        <a class="no-underline hover:underline mx-2" href="/">Home</a>
                        <a class="no-underline hover:underline mx-2" href="/blog">Blog</a>
                        <a class="no-underline hover:underline mx-2" href="/about">About</a>
                        <a class="no-underline hover:underline mx-2" href="/gallery">Gallery</a>
                        @guest
                            <a class="no-underline hover:underline mx-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline mx-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <div class="flex items-center space-x-2">
                                @if(Auth::user()->icon)
                                    <img src="{{ asset('uploads/' . Auth::user()->icon) }}" class="h-8 w-8 rounded-full" alt="User Image">
                                @endif
                                <span class="text-lg">{{ Auth::user()->name }}</span>
                            </div>
                            <a href="{{ route('logout') }}"
                                class="no-underline hover:underline mx-2"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
