<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


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

    public function signupPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|min:4|email|max:255',
            'password' => 'required|min:8|confirmed'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $act = User::where('email', $request->email)->first();

            if ($act != null) {
                if ($act->active === 1) {
                    return redirect()->back()->with('error', 'Akun kamu sudah aktif, silahkan login');
                } else {
                    return redirect()->back()->with('error', 'Anda sudah daftar silahkan cek email untuk aktivasi!');
                }
            } else {
                try {
                    $Vkey = md5(date("YmdHis") . $request->email);
                    $data = User::create([
                        'username' => $request->username,
                        'slug' => Str::slug($request->username),
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                        'avatar' => "default.png",
                        'active' => 3,
                        'vKey' => $Vkey,
                    ]);
                    Mail::to($request->email)->send(new UserRegisterMail($data));
                    
                    return redirect()->back()->with('success', 'Aktivasi akun telah dikirim melalui email');
                } catch (Exception $e) {
                    User::where('email', $request->email)->delete();
                    return redirect()->back()->with('error', 'Maaf, server sedang dalam perbaikan lakukan nanti!');
                }
            }
        }
    }

    public function signupActivasi($mail, $vkey)
    {
        if ($vkey) {
            $data = User::where('email', $mail)->where('vKey', $vkey)->first();
            if ($data) {
                try {
                    //code...
                    $data->active = '1';
                    $data->save();
                    return redirect()->route('login')->with('success', 'Aktivasi akun berhasil, silahkan login...');
                } catch (\Throwable $th) {
                    //throw $th;
                    return redirect()->route('login')->with('error', 'Register tidak dapat dilakukan untuk saat ini!');
                }
            } else {
                return redirect()->route('user.register')->with('error', 'Kode aktivasi akun anda salah, ulangi!');
            }
        } else {
            return redirect()->route('user.register')->with('error', 'Tidak ada aktivasi akun');
        }
    }
}
