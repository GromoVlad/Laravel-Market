@extends('layout.master')
@section('style', 'category')
@section('title', __('main.category') . $category->name)

@section('content')
    <h1>{{ $category->__('name') }}</h1>
    <p>{{ $category->__('description') }}</p>
    <div class="product">
        @foreach($category->products->map->skus->flatten() as $sku)
            @include('layout.cart', compact('sku'))
        @endforeach
    </div>
@endsection
