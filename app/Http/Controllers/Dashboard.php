<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $today = now()->translatedFormat('l, d F Y');
        return view('dashboard.dashboard' , compact('today'));
    }
}
