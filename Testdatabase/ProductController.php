<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $sweetProducts = Product::active()->category('sweet')->get();
        $savoryProducts = Product::active()->category('savory')->get();

        return view('products', compact('sweetProducts', 'savoryProducts'));
    }
}