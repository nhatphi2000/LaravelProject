<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProduct(){
        return view('products.index');

    }

    public function createProduct(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        

    }
}
