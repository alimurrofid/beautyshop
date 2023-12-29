<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus produk!';
        $text = "Apakah anda yakin ingin menghapus produk ini?";
        confirmDelete($title, $text);
        return view('dashboard.product.index', [
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
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->file('image')->store('product', 'public'),
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }

            $imagePath = $request->file('image')->store('product', 'public');

            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $imagePath, // Simpan nama file gambar ke dalam database
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);
        }

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->photo) {
            Storage::delete('public/product/' . $product->photo);
        }
        $product->delete();
        return response()->redirectTo(route('product.index'))->with('success', 'product deleted successfully.');
    }
}
