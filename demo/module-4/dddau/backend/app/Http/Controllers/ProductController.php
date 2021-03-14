<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth:api', ['except' => ['index', 'store', 'show', 'edit', 'destroy']]);
    }

    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return response()->json($product);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function edit(ProductRequest $request, $id)
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
}
