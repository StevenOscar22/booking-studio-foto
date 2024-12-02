<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('auth/login');
    }

    public function register_view()
    {
        return view('auth/register');
    }
    public function register_action(Request $params)
    {
        // dd($params->all());
        // dd($params->phone_number);

        if ($params->password != $params->confirm_password) {
            return back()->withErrors([
                'password' => 'Konfirmasi password tidak sama.',
            ])->withInput();
        }

        $params->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'phone_number' => ['required', 'max:20'],
        ]);

        $user_data = [
            'name' => $params->name,
            'email' => $params->email,
            'password' => Hash::make($params->password),
            'phone_number' => $params->phone_number,
        ];
        User::create(attributes: $user_data);

        return redirect('/login');
    }

    public function login_action(Request $params)
    {
        $credentials = $params->validate([
            'email' => ['required', 'min:4', 'max:255'],
            'password' => ['required'],
        ]);
        $remember = $params->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $params->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'status' => 'Username atau password salah.',
        ])->withInput();
    }
}
