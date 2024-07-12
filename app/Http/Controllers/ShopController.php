<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(6)->get();
        return view ('shop')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product_details')->with('product', $product);
    }


}
