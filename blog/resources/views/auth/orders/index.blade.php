@extends('auth.layout.master')

@section('title', 'Заказы')

@section('content')
    <div class="col-md-12">
        <h1>@lang('order.orders')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>@lang('order.name')</th>
                <th>@lang('order.phone')</th>
                <th>@lang('order.when_sent')</th>
                <th>@lang('order.sum')</th>
                <th>@lang('order.actions')</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at->format('d/m/Y в H:i:s')}}</td>
                    <td>{{$order->getFullPrice()}} {{ $currencySymbol }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            @isAdmin
                                <a class="btn btn-success" type="button"
                                   href="{{ route('admin-order-show', $order) }}">@lang('order.open')</a>
                            @else
                                <a class="btn btn-success" type="button"
                                   href="{{ route('person-order-show', $order) }}">@lang('order.open')</a>
                            @endisAdmin
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$orders->links()}}
    </div>
@endsection
