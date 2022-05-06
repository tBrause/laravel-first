<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        #$data = Product::where('id', 1)->get();
        #$data = Product::where('price', '>', 7)->get();
        #$data = Product::where('price', '>', 3)->orderby('price', 'desc')->get();
        #$data = Product::where('price', '>', 3)->where('price', '<', 10)->orderby('price', 'desc')->get();
        #$data = Product::whereRaw('price > 5 AND price < 10')->orderby('price', 'desc')->get();

        return view('product', compact('data'));
    }

    public function show($id)
    {
        $productId = $id;

        return view('showProduct', compact('productId'));
    }

    public function create()
    {
        return view('create');
    }
}

#$index = new Invokable();
