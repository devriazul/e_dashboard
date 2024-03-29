<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index', compact('products'));
    }
    public function create()
    {
        return view('backend.products.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        Product::create($data);
        return redirect()->route('products.index');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('backend.products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $product->update($data);
        return redirect()->route('products.index');
    }
}
