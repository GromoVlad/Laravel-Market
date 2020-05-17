@extends('layout.master')
@section('style', 'index')
@section('title', __('main.home_page'))

@section('content')
    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif
    <h1>@lang('main.all_product')</h1>
    <br>
    <form method="GET" action="{{ route('index') }}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">@lang('main.price_from')
                <input type="text" name="price_from" id="price_from" size="5" value="{{ request()->price_from }}">
                </label>
                <label for="price_to">@lang('main.to')
                    <input type="text" name="price_to" id="price_to" size="5" value="{{ request()->price_to }}">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif >
                    @lang('main.properties.hit')
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif >
                    @lang('main.properties.new')
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend"  @if(request()->has('recommend')) checked @endif >
                    @lang('main.properties.recommend')
                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                <a href="{{ route('index') }}" class="btn btn-warning">@lang('main.filter_reset')</a>
            </div>
        </div>
    </form>
    <br>
    <div class="row">
        @foreach($skus as $sku)
            @include('layout.cart', compact('sku'))
        @endforeach
    </div>
    {{$skus->links()}}
@endsection
