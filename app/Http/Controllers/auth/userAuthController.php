<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userAuthController extends Controller
{
    public function login()
    {
        return view('auth.loginUser');
    }

    public function signup()
    {
        return view('auth.signupUser');
    }
}
