@extends('layouts.app')

@section('content')

<section class=" bg-white my-4 rounded-lg shadow-lg">

  <div class="flex space-x-4 px-4 py-8">
    <img class="w-16 h-16 rounded-full" src="{{$user->avatar}}" alt="avatar">
    <div class="space-y-3">

      <h3 class="font-bold text-lg">
        {{$user->name}}
      </h3>
      <p class="max-w-sm opacity-75">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab minima corrupti cupiditate dolorem, in
        numquam.
      </p>
    </div>

  </div>
  <div class="bg-gray-200 px-4 py-8">


    @if (auth()->user()->is($user))
    <a class="inline-block text-center w-56 mx-auto py-3 font-semibold rounded-full text-blue-500 border border-solid border-blue-500 hover:bg-indigo-800 hover:text-white transition duration-100 ease-in-out"
      href="{{ route('profile.edit', $user)}}">
      edit profile
    </a>
    @else
    <x-follow-button :user="$user"></x-follow-button>
    @endif


  </div>

</section>
@include('tweets._timeline', [
"tweets"=> $user->tweets()->latest()->get()
])



@endsection