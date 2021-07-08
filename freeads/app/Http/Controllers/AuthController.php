<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function store()
    {
        $request = request()->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:8|max:36|confirmed'
        ]);

        User::create($request);

        return redirect()->to('/login');
    }

    public function login(Request $request)
    {
        $loginData = $request->only('email', 'password');
        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            return redirect()->to('/home');
        }
        return back()->withErrors([
            'email' => 'Identifiants invalides'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
