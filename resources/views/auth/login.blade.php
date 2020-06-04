@extends('layouts.auth')

@section('content')

<h3 class="text-4xl text-white font-bold mb-8">Login Twitter Today</h3>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="space-y-6">


        <div class="form-group row">
            <label for="email" class=" sr-only ">{{ __('E-Mail Address') }}</label>


            <input id="email" type="email"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="form-group row">
            <label for="password" class="sr-only">{{ __('Password') }}</label>


            <input id="password" type="password"
                class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
                name="password" placeholder="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit"
                    class="block w-64 mx-auto py-3 font-semiblod text-white rounded-full bg-blue-500 mt-12">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="inline-block mx-auto py-3 text-gray-500 hover:text-white"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif

            </div>
        </div>
</form>
<a class="block w-64 mx-auto py-3 font-semiblod rounded-full text-blue-500 border border-solid border-blue-500 mt-12"
    href="{{ route('register') }}">
    register
</a>

@endsection