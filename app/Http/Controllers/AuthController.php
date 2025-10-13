<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            $request->session()->put('id_role', Auth::user()->id_role);
            $request->session()->put('id_user', Auth::user()->id);
            $request->session()->put('nama_user', Auth::user()->name);

            return redirect()->route('home');
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

     // 🔹 Tambahan: redirect setelah login
    public function redirect()
    {
        // jika ada sistem role, bisa pakai switch-case
        // sekarang default redirect ke home
        return redirect()->route('home');
    }

}
