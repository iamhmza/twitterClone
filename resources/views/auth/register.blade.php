@extends('layouts.auth')

@section('content')
<h3 class="text-4xl text-white font-bold mb-8">Join Twitter Today</h3>

<div class="">
    <form class="block " method="POST" action="{{ route('register') }}">
        @csrf

        <div class="space-y-6">


            <input id="name" type="text"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="name" placeholder="name" value="{{ old('name') }}" required>


            <input id="username" type="text"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="username" placeholder="username" value="{{ old('username') }}" required>


            <input id="email" type="email"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="email" value="{{ old('email') }}" required placeholder="email">


            <input id="password" type="password"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="password" required placeholder="password">

            <input id="password-confirm" type="password"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="password_confirmation" required placeholder="repeat password">

        </div>

        <button type="submit" class="block w-64 mx-auto py-3 font-semiblod text-white rounded-full bg-blue-500 mt-12">
            {{ __('Register') }}
        </button>

    </form>
    <a class="block w-64 mx-auto py-3 font-semiblod rounded-full text-blue-500 border border-solid border-blue-500 mt-12 hover:bg-white hover:border-none transition duration-100 ease-in-out"
        href="{{ route('login') }}">
        Login
    </a>
</div>

@endsection