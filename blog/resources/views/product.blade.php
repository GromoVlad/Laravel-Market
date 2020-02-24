@extends('layout.master')
@section('style', 'product')
@section('title', 'Товар')

@section('content')
    <h1>{{$product->name}}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->price}} руб.</b></p>
    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
    <p>{{$product->description}}</p>
    <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
    </form>
@endsection