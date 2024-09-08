<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import Hash untuk menggunakan Hash::check()

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cari pengguna berdasarkan email
        $user = DB::table('users')
            ->select('UserID', 'Password') // Sesuaikan dengan nama kolom di database
            ->where('Email', $credentials['email']) // Pastikan nama kolom sesuai dengan casing di database
            ->first();

        if ($user) {
            // Periksa password, bisa jadi hash atau plaintext
            if (Hash::check($credentials['password'], $user->Password) || $credentials['password'] === $user->Password) {
                Auth::loginUsingId($user->UserID);
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            }
        }

        return back()->with('error', 'Login details are not valid');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
