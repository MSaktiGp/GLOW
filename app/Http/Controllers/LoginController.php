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
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek login dummy (contoh saja, belum pakai auth bawaan Laravel)
        if ($request->email === 'admin@example.com' && $request->password === 'password') {
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        } else {
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }
}
