<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminAuthController extends Controller
{
    public function login()
    {
        return view('auth.loginAdmin');
    }
}
