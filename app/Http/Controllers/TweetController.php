<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetController extends Controller
{
    //
    // /**
    //  * Class constructor.
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('tweets.home', ["tweets" => auth()->user()->timeline()]);

    }

    public function store()
    {
        $validtaedTweet = request()->validate(["body" => "required|max:255s"]);

        Tweet::create([
            "user_id" => auth()->id(),
            "body" => $validtaedTweet["body"],
        ]);

        return redirect(route("home"));

    }
}
