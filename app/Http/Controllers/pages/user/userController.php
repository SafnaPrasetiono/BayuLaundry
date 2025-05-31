<?php

namespace App\Http\Controllers\pages\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function profile()
    {
        return view('pages.users.profile');
    }

    public function address()
    {
        return view('pages.users.address');
    }

     public function logout()
    {
        if (Auth::guard('users')->check()) {
            Auth::guard('users')->Logout();
            return redirect()->route('index');
        }
    }
}
