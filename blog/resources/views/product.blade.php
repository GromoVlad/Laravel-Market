@extends('layout.master')
@section('style', 'product')
@section('title', 'Товар')

@section('content')
    <h1>{{$product->name}}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->price}} руб.</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{$product->description}}</p>
    <form action="{{ route('basket-add', $product->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
    </form>
@endsection