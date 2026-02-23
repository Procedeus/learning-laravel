<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'error' => 'Credenciais inválidas.',
        ]);
    }
    public function formLogout()
    {
        return view('logout');
    }
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
