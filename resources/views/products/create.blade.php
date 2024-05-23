@extends('layouts.app2')

@section('title', 'Create Products')


@section('content')
<h1>This is Create Product page</h1>
<div>index</div>
<form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
        <input type="text" name="name" placeholder="name">
    </div>
    <div>
        <input type="text" name="qty" placeholder="qty">
    </div>
    <div>
        <input type="text" name="price" placeholder="price">
    </div>

    <div>
        <input type="submit" value="save a new Product">
    </div>
</form>
@endsection
