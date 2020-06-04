<section class="bg-gray-800 text-white p-4 my-4 rounded-lg shadow-lg">
  <h5 class="font-bold text-2xl mb-4">Follows</h5>
  <div class="space-x-4">

    @forelse (auth()->user()->follows as $user)

    <a class="inline-block py-3 px-4 text-sm rounded hover:bg-gray-600" href="{{$user->path()}}">
      {{$user->name}}
    </a>

    @empty

    <p>Friends list is empty for now</p>
    @endforelse



  </div>

</section>