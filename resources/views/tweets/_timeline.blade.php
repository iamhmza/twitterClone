<section class="timeline mt-12">
  <div class="mt-8 max-w-screen-md mx-auto space-y-8">
    <h3 class="font-bold text-2xl mb-4">News</h3>




    @forelse ($tweets as $tweet)

    <div class="flex bg-white shadow-sm px-4 py-10">
      <div class="">

        <a href="{{$tweet->user->path()}}">
          <img class="w-16 h-16 rounded-full" src="{{$tweet->user->avatar}}" alt="avatar">
        </a>
      </div>

      <div class="flex-1 py-1 px-5 ">

        <h4 class="font-bold text-lg">
          <a href="{{$tweet->user->path()}}">
            {{ $tweet->user->name }}
          </a>
          <small class="font-semibold text-gray-700 ml-1">
            ({{$tweet->created_at->diffForHumans()}})
          </small>

        </h4>
        <p class="text-sm mt-2">
          {{$tweet->body}}
        </p>

      </div>
    </div>
    @empty

    <div>
      <p>there no tweet yet!</p>
    </div>

    @endforelse
  </div>

</section>