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
                        @foreach ($skus as $sku)
                            <tr>
                                <td>
                                    <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku] ) }}">
                                        <img height="56px" src="{{ Storage::url($sku->product->image) }}">
                                        {{ $sku->product->__('name') }}
                                    </a>
                                </td>
                                <td>{{ $sku->pivot->count }}</td>
                                <td>{{ $sku->pivot->price }} {{ $currencySymbol }}</td>
                                <td>{{ $sku->pivot->price * $sku->pivot->count}}  {{ $currencySymbol }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"><h3>@lang('order.total_cost'):</h3></td>
                            <td><h5>{{ $order->getFullPrice() }}  {{ $currencySymbol }}</h5></td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
