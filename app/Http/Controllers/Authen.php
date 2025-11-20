<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Authen extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flash('success','Sampai jumpa kemabli');
        return redirect('/');
    }
}
