<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginUser extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|min:4|email|max:255',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Alamat email tidak boleh kosong!',
            'email.min' => 'Alamat email tidak dikenal!',
            'email.email' => 'Alamat email tidak dikenal!',
            'email.max' => 'Alamat email tidak dikenal!',
            'password.required' => 'Password tidak boleh kosong!',
            'password.min' => 'Password tidak boleh kurang dari 8 karakter!',
        ]);

        $data = User::where('email', $this->email)->first();
        if ($data) {
            if (Hash::check($this->password, $data->password)) {
                if ($data->active == "1") {
                    Auth::guard('users')->loginUsingId($data->user_id);
                    if (session('cart')) {
                        return redirect()->route('checkout');
                    } else {
                        return redirect()->route('index');
                    }
                } else {
                    $this->dispatch('error', 'Akun anda belum diaktivasi!');
                }
            } else {
                $this->dispatch('error', 'Password anda salah!');
            }
        } else {
            $this->dispatch('error', 'Email dan Password anda salah!');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-user');
    }
}
