<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function products()
    {
        $products = Product::orderBy('id','DESC')->get();
        return view('products.index')->with('products',$products);
    }
}
