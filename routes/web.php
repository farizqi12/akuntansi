<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authen;
use App\Http\Controllers\Dashboard;

Route::get('/', [Authen::class, 'index'])->name('login');

Route::get('/login', function () {
    return view('auth.login'); // halaman yang memuat <livewire:auth.login>
})->name('login')->middleware('guest');

Route::post('/logout', [Authen::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
