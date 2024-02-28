<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');

    }

    public function showLoginForm() : View    
    {

        return view('auth.login'); 
    }

    public function login(Request $request) : RedirectResponse
    {

        $credentials = $request->validate([

            'email' => ['required', 'email'], 
            'password' => ['required', 'min:8'],
        ]); 

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate(); 

            return redirect()->intended('/home'); 
            

        }

        return back()->withErrors(['email' => 'Adresse E-mail Errone'])->onlyInput('email'); 
    }


    public function logout(Request $request) : RedirectResponse
    {

        Auth::logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return to_route('login'); 


    }
}
