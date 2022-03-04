@extends('layouts.app')

@section('content')
@section('title', 'product')

<div><h1>product specific page</h1>
    <div>
        <p><i> For now this is a temporary static array which is found in ProductController</i></p>
    </div>

    @foreach ($products as $product)
        <div class="container">
            <div class="row mx-auto sm:px-6 lg:px-8">
                <div class="col-6 shadow">
                    <h3> name: {{ $product['name'] }}
                        <ul>
                            <li>id: {{ $product['id'] }}</li>
                            <li>Price: {{ $product['price'] }}</li>
                            <p> Click <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">here</a> for More info about our products 
                        </ul>
                    <h3>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
