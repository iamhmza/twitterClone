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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="">
    <div id="app">

        @if (Route::has('login'))
        <nav class="p-6 shadow-md bg-white space-x-3 fixed inset-x-0">

            <a class="font-bold text-lg uppercase" href="{{ url('/') }}">Clone Twitter</a>

            @auth
            <a class="py-2 px-4 rounded hover:bg-gray-200" href="{{ url('/tweets') }}">Home</a>
            <a class="py-2 px-4 rounded hover:bg-gray-200" href="{{ route('profile', auth()->user() ) }}">Profile</a>
            <a class="py-2 px-4 rounded hover:bg-gray-200" href="{{ route('explorer') }}">Explorer</a>

            <form class="inline-block" action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="py-2 px-4 rounded hover:bg-gray-200">Logout</button>
            </form>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </nav>
        @endif

        <main class="py-4 bg-blue-200 pt-24">

            @auth
            <div class="container mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                You are logged in!
                            </div>
                        </div>
                    </div>
                </div>

                @include('tweets._follows')
                @endauth
                {{-- <img class="block w-20 h-20 rounded-full mx-auto transform -translate-y-16"
                    src="{{auth()->user()->avatar}}" alt="avatar"> --}}


                @yield('content')

            </div>
        </main>
    </div>
</body>

</html>