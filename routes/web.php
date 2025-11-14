<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login',[Auth::class, 'index'])->name('login');

