<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $emailExist = true;

    // dipanggil otomatis saat email berubah
    public function updatedEmail()
    {
        $this->emailExist = User::where('email', $this->email)->exists();
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!$this->emailExist) {
            return session()->flash('error', 'Email belum terdaftar');
        }

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return session()->flash('error', 'Email atau password salah');
        }

        session()->regenerate();

        session()->flash('success','Selamat datang di aplikasi akuntansi');
        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
