<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest');
        
    }

    public function showRegistrationForm(): View
    {
        return view('auth.register');
    }

    public function register(Request $request) : RedirectResponse
    {
        $credentialsRegistrationValidated = $request->validate([

            'name' => ['required', 'string', 'between:3,50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $credentialsRegistrationValidated['password'] = Hash::make($credentialsRegistrationValidated['password']);

        $user = User::create($credentialsRegistrationValidated); 

        Auth::login($user); 

        return redirect(RouteServiceProvider::HOME)->with('success', 'Vous inscription a ete reussi avec success !'); 
        
    }
}
