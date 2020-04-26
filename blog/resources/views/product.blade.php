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
    <h1>{{$product->__('name')}}</h1>
    <h2>{{$product->category->__('name')}}</h2>
    <p>@lang('basket.price'): <b>{{$product->price}}  {!! App\Services\CurrencyConversion::getCurrencySymbol() !!}</b></p>
    <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
    <p>{{$product->__('description')}}</p>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success" role="button">@lang('main.add_basket')</button>
        </form>
    @else
        <button disabled class="btn btn-secondary" role="button">@lang('main.not_available')</button>
        <br><br>
        <span>@lang('basket.notify')</span>
        <br><br>
        <span class="warning" style="color:red;">
            @if ($errors->get('email'))
               *{!! $errors->get('email')[0] !!}
            @endif
        </span>
        <form method="post" action="{{ route('subscription', $product) }}">
            @csrf
            <input type="text" name="email">
            <button class="btn btn-success" type="submit">@lang('main.send')</button>
        </form>
    @endif
@endsection
