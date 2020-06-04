<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('tweets.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('tweets.edit', compact('user'));
    }

    public function update(User $user)
    {
        $validateUser = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'max:255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            $validateUser['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($validateUser);

        return redirect($user->path())->with(["status" => "user upadted with success"]);
    }
}
