@extends('layout.master')
@section('style', 'basket')
@section('title', __('basket.basket'))

@section('content')
    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif

    <h1>@lang('basket.basket')</h1>
    <p>@lang('basket.placing_order')</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>@lang('basket.title')</th>
                <th>@lang('basket.amount')</th>
                <th>@lang('basket.price')</th>
                <th>@lang('basket.cost')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                            <img height="56px" src="{{ Storage::url($product->image) }}">
                            {{ $product->__('name') }}
                        </a>
                    </td>
                    <td>
                        <span class="badge">{{$product->countInOrder}}</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basket-remove', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" href="">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </button>
                            </form>
                            <form action="{{ route('basket-add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success" href="">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }}  {{ $currencySymbol }}</td>
                    <td>{{ $product->price * $product->countInOrder }}  {{ $currencySymbol }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">@lang('basket.cost'):</td>
                <td>{{ $order->getFullSum() }}  {{ $currencySymbol }}</td>
            </tr>

            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success"
               href="{{ route('basket-place') }}">@lang('basket.placing_order')</a>
        </div>
    </div>
@endsection
