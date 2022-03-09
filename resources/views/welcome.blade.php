@extends('layouts.app')

@section('content')
@section('title', 'Welcome')

<div><h1>Home page</h1></div>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <p><i>main/home page</i></p>
</div>


@foreach ($products as $product)
                        <p> 
                            {{ $product->id }}
                            {{ $product->productname }}
                            <img class="product-images" src="/images/webshop/{{ $product->file_name }}" width="100%">
                            {{ $product->price }}
                        </p>
                    @endforeach

@endsection
