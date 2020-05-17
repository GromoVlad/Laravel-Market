<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('main.online_shop'): @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/blog/resources/css/bootstrap.css">
    <link rel="stylesheet" href="/blog/resources/css/@yield('style').css">
    <script href="/blog/resources/js/bootstrap.js"></script>
    <script href="/blog/resources/js/jquery-3.5.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.category')</a></li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('main.basket')</a></li>
                @isAdmin
                <li><a href="{{ route('reset') }}">@lang('main.reset')</a></li>
                @endisAdmin
                <li><a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.language')
                        : @lang('main.set_lang')</a></li>
                @foreach($currencies as $currency)
                    <li>
                        <a class="currency" href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                @endguest

                @auth
                    @isAdmin
                    <li><a href="{{ route('admin-order') }}">@lang('main.admin')</a></li>
                    <li><a href="{{ route('person-order') }}">@lang('main.profile')</a></li>
                @else
                    <li><a href="{{ route('person-order') }}">@lang('main.profile')</a></li>
                    @endisAdmin
                    <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>@lang('main.product_categories')</p>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category', $category->code) }}">{{$category->__('name')}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6"><p>@lang('main.popular_products')</p>
                <ul>
                    @foreach($bestSkus as $bestSku)
                        <li>
                            <a href="{{ route('sku', [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}">
                                {{ $bestSku->product->__('name') }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
