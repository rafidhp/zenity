<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postlogin(Request $request) {
        $request->validate([
            'username' => 'required|exists:users,username|max:100',
            'password' => 'required',
        ], [
            'username.required' => 'Username is required',
            'username.exists' => 'Username does not exist',
            'username.max' => 'Username must not exceed 100 characters',
            'password.required' => 'Password is required',
        ]);

        $credentials = $request->only(['username', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors([
            'username' => 'Username or password is incorrect. Please try again!',
        ]);
    }

    public function register() {
        return view('auth.register');
    }

    public function postregis(Request $request) {
        $request->validate([

        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
