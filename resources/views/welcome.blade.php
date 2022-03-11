@extends('layouts.app')

@section('content')
@section('title', 'Welcome')

<div><h1>Home page</h1></div>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <p><i>main/home page</i></p>


    @foreach ($products as $product)
        <div class="container">
            <div class="row mx-auto sm:px-6 lg:px-8">
                <div class="col-6 shadow">
                    <h3> 
                        {{ $product->productname }}
                        <ul>
                            <li>id: {{ $product->id }}</li>
                            <li>Price: {{ $product->price }}</li>
                            <img class="product-image" src="images/webshop/{{ $product->file_name }}" width="100%">
                        </ul>
                    <h3>
                </div>
            </div>
        </div>
    @endforeach
</div>



@endsection
