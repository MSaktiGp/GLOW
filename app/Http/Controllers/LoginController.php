<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    // Menangani submit form login
    public function login(Request $request)
    {
        // Validasi
        $request->validate([
            'usnemail' => 'required',
            'password' => 'required',
        ]);

        $usnemail = $request->input('usnemail');
        $password = $request->input('password');

        // Cek apakah input berupa email
        $fieldType = filter_var($usnemail, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Coba login
        if (auth()->attempt([$fieldType => $usnemail, 'password' => $password])) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'owner') {
                return redirect()->route('dashboard.owner');
            } else if (auth()->user()->role == 'user') {
                return redirect()->route('dashboard.user');
            }
        }

        return back()->withErrors([
            'usnemail' => 'Email/Username atau Password salah.',
        ])->withInput();
    }
}
