<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

        public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return match ($user->role) {
                2 => redirect('/super-admin/dashboard'),
                1 => redirect('/admin/dashboard'),
                default => redirect('/user/dashboard'),
            };
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }
    
        public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|integer|in:0,1,2', // 0 = User, 1 = Admin, 2 = Super Admin
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        return match ($user->role) {
            2 => redirect('/super-admin/dashboard'),
            1 => redirect('/admin/dashboard'),
            default => redirect('/user/dashboard'),
        };
    }
  
}

