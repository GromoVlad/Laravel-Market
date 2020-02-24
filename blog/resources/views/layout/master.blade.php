<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/blog/resources/css/bootstrap.css">
    <link rel="stylesheet" href="/blog/resources/css/@yield('style').css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('index') }}">Все товары</a></li>
                <li><a href="{{ route('categories') }}">Категории</a></li>
                <li><a href="{{ route('basket') }}">В корзину</a></li>
                <li><a href="/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="/locale/en">en</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Панель администратора</a></li>
                @endguest
                @auth
                        <li><a href="{{ route('order') }}">Профиль</a></li>
                    <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @yield('content')
    </div>
</div>
</body>
</html>