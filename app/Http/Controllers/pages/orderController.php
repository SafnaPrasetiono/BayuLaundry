<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class orderController extends Controller
{
    public function ordercart(Request $request)
    {
        //code...
        $extra = [
            'qty' => 1,
            'notes' => ''
        ];
        $data = product::find($request->product_id)->toArray();

        $merged = array_merge($data, $extra);
        unset($merged['descriptionList']);


        $cart = session()->get('cart');
        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['qty'] += $extra['qty'];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product sudah masuk ke keranjang');
        } else {

            $cart[$request->product_id] = $merged;

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product sudah masuk ke keranjang!');
        }
        try {
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Sorry something worng with order!');
        }
    }

    public function cart()
    {
        return view('pages.cart');
    }


    public function checkout()
    {
        if (Auth::guard('users')->check()) {
            if (session('cart')) {
                return view('pages.checkout');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->route('login');
        }
    }
}
