@extends('master')
@section('style', 'category')
@section('title', 'Категория ' . $category->name)

@section('content')
    <div class="starter-template">
        <h1>{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>
        <div class="row">
            @foreach($category->products as $product)
                @include('cart', compact($product))
            @endforeach
        </div>
    </div>
@endsection