<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="{{mix('css/style.css')}}">

</head>

<body>
    <div class=" ">
        @if (Route::has('login'))
        <nav class="px-6 py-4 shadow-md space-x-5">

            <a class="font-bold text-lg uppercase" href="{{ url('/') }}">Clone Twitter</a>

            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </nav>
        @endif

        <div class="text-center mt-32">
            <div class="text-2xl">
                Laravel
            </div>

        </div>
    </div>
</body>

</html>