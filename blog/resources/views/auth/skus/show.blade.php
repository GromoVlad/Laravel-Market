@extends('auth.layout.master')

@section('title', 'SKU: ' . $skus->name)

@section('content')
    <div class="col-md-12">
        <h2>Товар: {{$skus->product->name}}</h2>
        <table class="table">
            <tbody>
            <tr>
                <th>Поле</th>
                <th>Значение</th>
            </tr>
            <tr>
                <td>Свойства:</td>
                <td>{{$skus->propertyOptions->map->name->implode(' | ')}}</td>
            </tr>
            <tr>
                <td>Цена</td>
                <td>{{ $skus->price }}</td>
            </tr>
            <tr>
                <td>Кол-во</td>
                <td>{{ $skus->count }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
