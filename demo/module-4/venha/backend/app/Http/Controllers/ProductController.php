<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save();
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json($product);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
