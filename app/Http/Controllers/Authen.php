<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Authen extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login (Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            $request->session()->flash('success', 'Login berhasil! selamat datang kembali');
            return redirect()->intended('dashboard');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ])->onlyInput('email');
        };
    }
}
