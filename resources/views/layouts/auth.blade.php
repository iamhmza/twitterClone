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

<body>


  <div class="bg-blue-700 h-screen">
    <div class="md:flex">
      <div class="hidden md:flex items-center justify-center flex-1 bg-blue-500 h-screen text-white">

        <div class=" max-w-lg">

          <h2 class="text-5xl text-white font-semibold leading-tight mb-8">See what happening in the world
            right now</h2>

          <ul class=" space-y-4 text-white">
            <li>Follow your interests.</li>
            <li>Hear what people are talking about.</li>
            <li>Join the conversation</li>
          </ul>

        </div>


      </div>
      <div class=" md:max-w-md w-full md:w-5/12 bg-gray-800 h-screen text-center flex flex-col justify-center">
        <div class="p-8">
          {{-- <h3 class="text-4xl text-white font-bold mb-8">Join Twitter Today</h3>

          <div class="">
            <form class="block " method="POST" action="{{ route('register') }}">
          @csrf

          <div class="space-y-6">


            <input id="name" type="text"
              class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
              name="name" placeholder="name" value="{{ old('name') }}" required>




            <input id="email" type="email"
              class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500 @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required placeholder="email">



            <input id="password" type="password"
              class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500 "
              name="password" required placeholder="password">

            <input id="password-confirm" type="password"
              class="block w-full text-white focus:outline-none bg-gray-900 placeholder-gray-500 rounded-full text-sm px-4 py-3 border border-gray-500"
              name="password_confirmation" required placeholder="repeat password">

          </div>

          <button type="submit" class="block w-64 mx-auto py-3 font-semiblod text-white rounded-full bg-blue-500 mt-12">
            {{ __('Register') }}
          </button>

          </form>
        </div> --}}

        @yield('content')
      </div>
    </div>
  </div>
  </div>
</body>

</html>