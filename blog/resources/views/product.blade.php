@extends('layout.master')
@section('style', 'product')
@section('title', 'Товар')

@section('content')

    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif

    <h1>{{$product->name}}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->price}} руб.</b></p>
    <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
    <p>{{$product->description}}</p>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        </form>
    @else
        <button disabled class="btn btn-secondary" role="button">Нет в наличии</button>
        <br>
        <br>
        <span>Сообщить мне, когда товар появится в наличии</span>
        <br>
        <span class="warning" style="color:red;">
            @if ($errors->get('email'))
               *{!! $errors->get('email')[0] !!}
            @endif
        </span>
        <form method="post" action="{{ route('subscription', $product) }}">
            @csrf
            <input type="text" name="email">
            <button type="submit">Отправить</button>
        </form>
    @endif

@endsection
