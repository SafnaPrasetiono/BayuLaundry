<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ShoppingCart extends Component
{

    public $items, $total, $price_other, $discount;

    public function removeCart($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        if (count(session('cart')) === 0) {
            $this->dispatch('info', 'Keranjang belanja anda kosong!');
        }
    }
    public function render()
    {

        if(session('cart')){
            $this->items = count(session('cart'));
            foreach(session('cart') as $itm){
                $this->price_other = $itm['price_other'];
                $this->total += ($itm['qty'] * $itm['price']);
                $this->discount = $itm['discount'];
            }
        }
        return view('livewire.pages.shopping-cart');
    }
}
