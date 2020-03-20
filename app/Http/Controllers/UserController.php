<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the users with paginate.
     *
     * @param  object  $request
     * @return View
     */
    public function users(Request $request)
    {
        $users = User::paginate(10);
        return view('users', compact('users'));
    }
}