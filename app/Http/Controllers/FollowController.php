<?php

namespace App\Http\Controllers;

use App\User;

class FollowController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return back()->with('status', 'success');
    }
}
