@extends('auth.layout.master')

@section('title', 'Заказ №' . $order->id)

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>@lang('order.order') №{{ $order->id }}</h1>
                    <p>@lang('order.customer'): <b>{{ucfirst($order->name) }}</b></p>
                    <p>@lang('order.phone'): <b>{{ $order->phone }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('order.title')</th>
                            <th>@lang('order.amount')</th>
                            <th>@lang('order.price')</th>
                            <th>@lang('order.cost')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product', [$product->category->code, $product->code] ) }}">
                                        <img height="56px" src="{{ Storage::url($product->image) }}">
                                        {{ $product->__('name') }}
                                    </a>
                                </td>
                                <td>{{ $product->pivot->count }}</td>
                                <td>{{ $product->price }} {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>
                                <td>{{ $product->getPriceForCount()}}  {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"><h3>@lang('order.total_cost'):</h3></td>
                            <td><h5>{{ $order->getFullPrice() }}  {{ App\Services\CurrencyConversion::getCurrencySymbol() }}</h5></td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
