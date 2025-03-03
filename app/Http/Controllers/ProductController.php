<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products', ['products' => Product::all()]);
    }

    public function show(int $id): View
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product', ['product' => $product]);
    }
}
