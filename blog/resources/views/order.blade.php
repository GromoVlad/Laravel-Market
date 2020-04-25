@extends('layout.master')
@section('style', 'order')
@section('title', 'Оформить заказ')

@section('content')
    <h1>@lang('basket.confirm_order'):</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>@lang('basket.cost'): <b>{{$order->getFullPrice()}} ₽</b></p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                @csrf
                <div>
                    <p>@lang('basket.text'):</p>
                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">@lang('basket.name'):</label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">@lang('basket.phone'):</label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        @guest
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email:
                                    <div class="col-lg-4">
                                        <input type="text" name="email" id="email" value="" class="form-control">
                                    </div>
                                </label>
                            </div>
                        @endguest
                    </div>
                    <input type="submit" class="btn btn-success" value="@lang('basket.confirm_order')">
                </div>
            </form>
        </div>
    </div>
@endsection
