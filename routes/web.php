<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProductController;
use App\Livewire\ShoppingCart;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ProductController::class, 'index'])->name('products.index');


// Ruta para ver el carrito (usando Livewire)
Route::get('/cart', ShoppingCart::class)->name('cart');
