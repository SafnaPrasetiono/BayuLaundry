<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index(){
        // $cart  =  session()->forget('cart');
        // unset($cart);
        // dd(session('cart'));
        $product = product::where('status', 1)->get();
        return view('pages.index', [
            'product' => $product
        ]);
    }

    public function about()
    {
        return view('pages.aboutme');
    }

    public function termcondition()
    {
        return view('pages.termcondition');
    }

    public function howpayment()
    {
        return view('pages.howpayment');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
