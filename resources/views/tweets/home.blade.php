@extends('layouts.app')

@section('content')

<div class="mt-8 max-w-screen-md mx-auto">

    <form class="bg-white px-4 py-6 shadow rounded" method="POST" action="/tweets">
        @csrf


        <textarea class="block w-full border border-gray-400 p-4 resize-none" placeholder="type here..." name="body"
            id="body"></textarea>

        @error('body')
        <span class="inline-block font-semibold text-red-600 bg-red-300 p-4 mt-2">{{$message}}</span>
        @enderror

        <div class="flex justify-between items-center mt-12">

            <a href="{{auth()->user()->path()}}">
                <img class="block w-16 h-16 rounded-full" src="{{auth()->user()->avatar}}" alt="avatar">
            </a>


            <button class="block w-64 py-3 font-semiblod text-white rounded-full bg-blue-500 " type="submit">

                Tweet

            </button>
        </div>
    </form>

    @include('tweets._timeline')


</div>

@endsection