<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCart extends Component
{
    public $cartItems = [];
    public $total = 0;

    /*Listener del evento para actualizar el carrito a en la funcion loadCart*/
    protected $listeners = ['cartUpdated' => 'loadCart']; 

    public function loadCart()
    {
        $this->cartItems = Cart::content()->map(function ($item) {
            return [
                'rowId' => $item->rowId,
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'total' => $item->price * $item->qty,
            ];
        })->toArray();
        $this->total = Cart::total();
    }

    public function mount()
    {
        $this->loadCart();
    }

    public function incrementQuantity($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, $item->qty + 1);
        $this->dispatch('cartUpdated');
    }

    public function decrementQuantity($rowId)
    {
        $item = Cart::get($rowId);
        if ($item->qty > 1) {
            Cart::update($rowId, $item->qty - 1);
        } else {
            Cart::remove($rowId);
        }
        $this->dispatch('cartUpdated');
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.shopping-cart')->layout('livewire.products-view');
    }
}