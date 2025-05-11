<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $product = product::where('status', 1)->get();
        return view('pages.index', [
            'product' => $product
        ]);
    }

    public function about()
    {
        return view('pages.aboutme');
    }
}
