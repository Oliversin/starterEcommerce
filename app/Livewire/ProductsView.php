<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductsView extends Component
{
    public $products;

    /// el Mount es el  (__construct()) de Livewire
    public function mount()
    {
        $this->products = Product::all();
    }

    public function addToCart($id, $name, $price)
    {
        Cart::add($id, $name, 1, $price);
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.products-view');
    }
}
