<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Aktor;
use App\Models\responden;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Ambil data dari form login
        $username = $request->input('username');
        $password = $request->input('password');

        // Cari data responden dengan nim_responden yang sesuai dengan username
        $aktor = aktor::where('kata_pengguna', $username)->first();


        // Jika data responden ditemukan dan password sesuai
        if ($aktor && $aktor->kata_sandi === $password) {
            // Lakukan proses autentikasi manual
            Auth::login($aktor);

            // Redirect ke halaman tertentu setelah login
            return redirect()->intended('/menuAdmin');
        }

        // Jika tidak, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }
}
