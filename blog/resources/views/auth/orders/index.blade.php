@extends('auth.layout.master')

@section('title', 'Заказы')

@section('content')
    <div class="col-md-12">
        <h1>Заказы</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Когда отправлен</th>
                <th>Сумма</th>
                <th>Действия</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at->format('d/m/Y в H:i:s')}}</td>
                    <td>{{$order->getFullPrice()}} руб.</td>
                    <td>
                        <div class="btn-group" role="group">
                            @isAdmin
                                <a class="btn btn-success" type="button"
                                   href="{{ route('admin-order-show', $order) }}">Открыть</a>
                            @else
                                <a class="btn btn-success" type="button"
                                   href="{{ route('person-order-show', $order) }}">Открыть</a>
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