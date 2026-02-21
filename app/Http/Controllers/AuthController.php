<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        print('Login successful');
        return response()->json(['message' => 'Login successful']);
    }
}
