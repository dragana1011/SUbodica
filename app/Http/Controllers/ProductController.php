<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function index()
    {
        $allProducts = Product::all();

        return view("products", ["var_allProducts" => $allProducts]);
    }

    public function show($id)
    {
        // $product = Product::where('id', $id)->first(); 
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }
}
