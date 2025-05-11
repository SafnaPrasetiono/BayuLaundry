<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminAuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('admins')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.loginAdmin');
    }
}
