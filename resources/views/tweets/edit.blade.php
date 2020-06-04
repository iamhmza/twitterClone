@extends('layouts.app')

@section('content')

<section class="">
  <div class="max-w-lg mx-auto">
    <form class="bg-white my-4 rounded-lg shadow-lg" method="POST" action="{{ $user->path() }}"
      enctype="multipart/form-data">
      @csrf
      @method("PATCH")
      <div class="space-y-5 p-8">

        <h3>edit profile</h3>

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="text" name="name"
          value="{{$user->name}}" placeholder="name" required>

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="text" name="username"
          value="{{$user->username}}" placeholder="username" required>

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="email" name="email"
          value="{{$user->email}}" placeholder="email" required>

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="file" name="avatar">

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="password" name="password"
          placeholder="password" required>

        <input class="block w-full border border-gray-400 border-solid px-3 py-4" type="password"
          name="password_confirmation" placeholder="confirm password" required>

      </div>

      <div class="bg-gray-200 px-4 py-8">
        <button
          class="inline-block text-lg text-center mx-auto px-8 py-3 font-semibold rounded-lg border bg-indigo-800 text-white"
          type="submit">
          save
        </button>
      </div>
    </form>
  </div>

</section>


@endsection