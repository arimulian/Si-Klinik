<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            if (auth()->user()->isAdmin()) {
                return redirect()->route('dashboard');
            }
            return 'dokter';
        }
        return back()->withInput()->with('status', 'Email atau Password yang anda masukan salah');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
