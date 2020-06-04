@extends('layouts.app')

@section('content')

<div class="mt-8 max-w-screen-md mx-auto space-y-5 ">

  <h3 class="font-bold text-xl mb-8 capitalize">
    explorer
  </h3>

  @foreach ($users as $user)

  <div class="bg-white p-4">
    {{-- <div class="inline-block">
      <img class="w-10 h-10 rounded-full" src="https://i.pavatar.com/30?u={{$user->username}}"
    alt="{{$user->username}}'s avatar'">
  </div> --}}
  <div class="inline-block">

    <a href="{{$user->path()}}">
      <h4 class="font-bold text-lg">{{'@'.$user->username}}</h4>
    </a>
    <span>{{$user->email}}</span>
  </div>


</div>

@endforeach

{{$users->links()}}



</div>

@endsection