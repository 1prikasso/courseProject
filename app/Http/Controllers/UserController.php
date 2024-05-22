<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login() {
        return view('user.login');
    }

    function signIn(Request $request) {
        $request->validate([
            'userEmail' => 'email|Required|max:255',
            "password" => "required|max:255|min:6"
        ]);        

        Auth::login();
    }
}
