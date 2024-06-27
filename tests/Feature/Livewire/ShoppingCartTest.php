<?php

namespace Tests\Feature\Livewire;
 
use App\Livewire\ShoppingCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Image;
use Livewire\Livewire;
use Tests\TestCase;
use function Pest\Livewire\livewire;

it('renders successfully', function () {
    Livewire::test(ShoppingCart::class)
        ->assertStatus(200);
});

it('loads cart content correctly', function () {
    // "Crear" un producto de prueba
    $product = Product::find(1);
    

    // Añadir el producto al carrito
    Cart::add($product->id, $product->name, 1, $product->price);

    // Ejecutar el componente Livewire
    Livewire::test(ShoppingCart::class)
        ->assertSee($product->name)
        ->assertSee($product->price);
});


it('can decrement quantity', function () {
    // "Crear" un producto de prueba
    $product = Product::find(1);

    // Añadir el producto al carrito
    $cartItem = Cart::add($product->id, $product->name, 2, $product->price);

    // Ejecutar el componente Livewire
    livewire(ShoppingCart::class)
        ->call('decrementQuantity', $cartItem->rowId)
        ->assertDispatched('cartUpdated');

    // Verificar que la cantidad del producto ha disminuido
    $updatedCartItem = Cart::get($cartItem->rowId);
    expect($updatedCartItem->qty)->toBe(1);
});


it('can remove an item from cart', function () {
    // "Crear" un producto de prueba
    $product = Product::find(1);

    // Añadir el producto al carrito
    $cartItem = Cart::add($product->id, $product->name, 1, $product->price);

    // Ejecutar el componente Livewire
    livewire(ShoppingCart::class)
        ->call('removeFromCart', $cartItem->rowId)
        ->assertDispatched('cartUpdated');

    // Verificar que el producto ha sido eliminado del carrito
    Livewire::test(ShoppingCart::class)->assertDontSee($product->name);
});




