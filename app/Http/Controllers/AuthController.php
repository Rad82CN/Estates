<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function store(UserRegisterRequest $request) {
        $validated = $request->validated();

        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );

        return redirect()->route('index');
    }

    public function login() {
        return view('auth.login');
    }

    public function authenticate(UserLoginRequest $request) {
        $validated = $request->validated();

        if(auth()->attempt($validated)) {

            $request->session()->regenerate();
            
            return redirect()->route('index')->with('success', 'Logged in successfully!');
        }

        return redirect()->route('index')->withErrors([
            'email' => 'This email address is not valid',
        ]);
    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('index');
    }
}
