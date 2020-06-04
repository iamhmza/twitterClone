<?php

namespace App\Http\Controllers;

use App\User;

class ExplorerController extends Controller
{
    public function index()
    {
        return view('explorer', ["users" => User::paginate(5)]);
    }
}
