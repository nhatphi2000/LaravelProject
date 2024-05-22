<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function showProduct(){

        $products = Product::all();
        return view('products.index',['products' => $products]);



    }

    public function createProduct(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required',
            'qty' =>'required|numeric',
            'price' =>'required',

        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));



    }

    public function edit(Product $product){
        return view('products.edit',['product'=>$product]);

    }

    public function update(Product $product, Request $request){

        $data = $request ->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','product updated successfully');
    }
}
