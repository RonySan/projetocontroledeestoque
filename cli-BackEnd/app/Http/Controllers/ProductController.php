<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Certifique-se de importar o namespace correto para o modelo

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = new Product();
        // ... atribuir valores aos campos do produto ...
        $product->save();

        return response()->json($product, 201); // 201 Created
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // ... atualizar valores dos campos do produto ...
        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json(null, 204); // 204 No Content
    }
}


// class ProductController extends Controller
// {
//     public function index()
// {
//     $products = Product::all();
//     return view('products.index', compact('products'));
// }

// public function create()
// {
//     return view('products.create');
// }

// public function store(Request $request)
// {
//     $product = new Product();
//     $product->name = $request->input('name');
//     $product->quantity = $request->input('quantity');
//     $product->price = $request->input('price');
//     $product->save();

//     return redirect()->route('products.index');
// }

// public function edit($id)
// {
//     $product = Product::find($id);
//     return view('products.edit', compact('product'));
// }

// public function update(Request $request, $id)
// {
//     $product = Product::find($id);
//     $product->name = $request->input('name');
//     $product->quantity = $request->input('quantity');
//     $product->price = $request->input('price');
//     $product->save();

//     return redirect()->route('products.index');
// }

// public function destroy($id)
// {
//     $product = Product::find($id);
//     $product->delete();

//     return redirect()->route('products.index');
// }

// }
