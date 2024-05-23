@extends('layouts.app2')

@section('title', 'Edit Products')


@section('content')
<h1>This is Edit Product page</h1>
<div>index</div>
<form method="post" action="{{route('product.update', ['product'=> $product])}}">
    @csrf
    @method('put')
    <div>
        <input type="text" name="name" placeholder="name" value="{{$product->name}}">
    </div>
    <div>
        <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}">
    </div>
    <div>
        <input type="text" name="price" placeholder="price" value="{{$product->price}}">
    </div>

    <div>
        <input type="submit" value="Update product">
    </div>
</form>
@endsection
