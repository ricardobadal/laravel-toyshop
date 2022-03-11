@extends('layouts.app')

@section('content')
@section('title', 'product')

<h1>product specific page</h1>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 pt-3 p-2 product-col">
            <div class="card">
                <img src="/images/webshop/{{ $product->file_name }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $product->productname }}</h5>
                        <p class="price text-style"> &euro; {{ $product->price }}</p>
                        <p class="price text-style">Details: {{ $product->details }}</p>
                        <p class="price text-style">Color: {{ $product->color }}</p>
                    <input type="button" class="btn text-style submit-button"  value="Add to cart">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
