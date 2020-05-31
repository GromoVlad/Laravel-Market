@extends('auth.layout.master')
@section('title', 'Товары')
@section('content')
    <div class="col-md-12">
        <h1>Товары</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Кол-во SKU</th>
                <th>Действия</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td style="text-align: center">{{ count($product->skus) }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               href="{{ route('products.show', $product) }}">Открыть</a>
                            <a class="btn btn-warning" type="button"
                               href="{{ route('products.edit', $product) }}">Редактировать</a>
                            <a class="btn btn-info" type="button"
                               href="{{ route('skus.index', $product) }}">SKU</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
        <a class="btn btn-success" type="button" href="{{ route('products.create') }}">Добавить товар</a>
    </div>
@endsection
