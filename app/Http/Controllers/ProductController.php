<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();

    }
 

     public function show(Product $products)
    {
        return $products;
    }


    public function store(Request $request)
    {
        $products = Product::create($request->all());

        return response()->json($products, 201);
    }


   public function update(Request $request, Product $products)
    {
        $products->update($request->all());

        return response()->json($products, 200);
    }


     public function delete(Product $products)
    {
        $products->delete();

        return response()->json(null, 204);
    }

}
