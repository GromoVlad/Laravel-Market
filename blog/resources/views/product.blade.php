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
    <h1>{{$skus->product->__('name')}}</h1>
    <h2>{{$skus->product->category->__('name')}}</h2>
    @isset($skus->product->properties)
        @foreach($skus->propertyOptions as $propertyOption)
            <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
        @endforeach
    @endisset
    <h3>@lang('basket.price'): <b>{{$skus->product->price}}  {{ $currencySymbol }}</b></h3>
    <img src="{{ Storage::url($skus->product->image) }}" alt="{{$skus->product->name}}">
    <p>{{$skus->product->__('description')}}</p>
    @if($skus->isAvailable())
        <form action="{{ route('basket-add', $skus->product->id) }}" method="POST">
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
        <form method="post" action="{{ route('subscription', $skus->product) }}">
            @csrf
            <input type="text" name="email">
            <button class="btn btn-success" type="submit">@lang('main.send')</button>
        </form>
    @endif
@endsection
