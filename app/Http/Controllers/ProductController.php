<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', [
            'title' => 'Products',
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product', [
            'title' => $product->product_name,
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function purchase(Product $product)
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'You must be logged in to make a purchase.');
        }
        
        Purchase::create([
            'product_id' => $product->id,
            'user_id' => auth()->id(),
        ]);

        return redirect('/products')->with('success', 'Purchase successful!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
