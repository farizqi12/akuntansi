<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authen;
use App\Http\Controllers\Dashboard;

Route::get('/',[Authen::class, 'index'])->name('login');

Route::post('/login', [Authen::class, 'login'])->name('login.post');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
