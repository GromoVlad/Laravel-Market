@extends('layout.master')
@section('style', 'category')
@section('title', __('main.category') . $category->name)

@section('content')
    <h1>{{ $category->__('name') }}</h1>
    <p>{{ $category->__('description') }}</p>
    <div class="row">
        @foreach($category->products as $product)
            @include('layout.cart', compact($product))
        @endforeach
    </div>
@endsection
