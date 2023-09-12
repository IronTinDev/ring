<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except("logout");    
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email'     => ["required","string","email"],
            'password'  => "required|string"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('products.index');
        }

        return back()->withErrors([
            'email' => "The provided credentials do not match our records."
        ])->onlyInput("email");
    }
}
