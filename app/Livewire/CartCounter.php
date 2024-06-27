<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    ///Debiudo a que no esta nesteado le agregue el listener para que actualizara al hacer uso del carrito
    protected $listeners = ['cartUpdated' => 'loadCart']; 
    public function render()
    {
        $cartCount = Cart::content()->count();
        return view('livewire.cart-counter', compact('cartCount'));
    }
}
