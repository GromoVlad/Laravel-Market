@extends('master')
@section('style', 'product')
@section('title', 'Товар')

@section('content')
    <div class="starter-template">
        <h1>iPhone X 256GB</h1>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>89990 руб.</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
        <p>Отличный продвинутый телефон с памятью на 256 gb</p>
        <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
            <input type="hidden" name="_token" value="SNgbE2khN3dTcF4sTHdnrqV1EeBuN8aaOe0QhN5A">        
        </form>
    </div>
@endsection