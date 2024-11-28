<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $isLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($isLogin)) {
            return redirect()->route('dashboard');
        }else {
            return redirect('')->withErrors('Email atau Password tidak sesuai!') -> withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
