<form method="POST" action="/profile/{{$user->username}}/follow">
  @csrf
  <button type="submit"
    class="inline-block w-64 mx-auto py-3 font-semibold uppercase text-white rounded-full bg-blue-500 hover:bg-blue-600 ">
    {{ auth()->user()->following($user) ? 'unfollow': 'follow'}}
  </button>
</form>