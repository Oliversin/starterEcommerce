<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* *****************************
        Estas son algunas pruebas al ire que hice hasta que note que el problema estaba en el Seeder de Images
        //$products = Product::all(); 
        //$images = Image::all(); 
        //$products = Product::with('images')->get();
        //$products->load('images');
        //dd($product->images);
        //return response()->json($images);

        asi es como inicie el proyecto, hasta que empece a usar Livewire!
        //return view('products.products', compact('products'));
        ******************************/

        return view('products.products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product.',
            'price' => 99.99,
        ]);
        
        // Add images to the product
        $product->images()->createMany([
            ['url' => 'path/to/image1.jpg'],
            ['url' => 'path/to/image2.jpg'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
