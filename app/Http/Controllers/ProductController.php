<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        return view("products.form",compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $image = NULL;
        if ($request->file('image')) {
            $image = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $image);
        }
        $product = Product::create([
            'product_name' => $request->name,
            'product_image' => $image,
            'product_description'   => $request->description
        ]);
        
        return redirect()->route("products.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("products.form",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $image = NULL;
        if ($request->file('image')) {
            if(Storage::exists("public/images/".$product->product_image)){
                Storage::delete("public/images/".$product->product_image);
            }
            $image = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $image);
        }
        $product->update([
            'product_name' => $request->name,
            'product_image' => $image,
            'product_description'   => $request->description
        ]);

        return redirect()->route("products.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();

        return redirect()->route("products.index");

    }
}
