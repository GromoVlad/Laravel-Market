@extends('auth.layout.master')
@section('style', 'categories')
@section('title', 'Товарные предложения')

@section('content')
    <div class="col-md-12">
        <h2>Товарные предложения для "{{ $product->name }}"</h2>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Товарные предложения</th>
                <th>Цена</th>
                <th>Кол-во</th>
                <th>Действия</th>
            </tr>
            @foreach($skus as $sku)
                <tr>
                    <td>{{ $sku->id }}</td>
                    <td>{{ $sku->propertyOptions->map->name->implode(', ') }}</td>
                    <td>{{ $sku->price }}</td>
                    <td>{{ $sku->count }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button" href="{{ route('skus.show', [$product, $sku]) }}">Открыть</a>
                            <a class="btn btn-warning" type="button" href="{{ route('skus.edit', [$product, $sku]) }}">Редактировать</a>
                            <form action="{{ route('skus.destroy', [$product, $sku]) }}" method="POST">
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
        <a class="btn btn-success" type="button" href="{{ route('skus.create', $product)}}">Добавить SKU</a>
    </div>
@endsection
