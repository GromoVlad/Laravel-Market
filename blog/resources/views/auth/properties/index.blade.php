@extends('auth.layout.master')
@section('style', 'categories')
@section('title', 'Администрирование: Свойства')

@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Название_Eng</th>
                <th>Действия</th>
            </tr>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button" href="{{ route('properties.show', $property) }}">Открыть</a>
                            <a class="btn btn-warning" type="button" href="{{ route('properties.edit', $property) }}">Редактировать</a>
                            <a class="btn btn-primary" type="button" href="{{ route('property_option.index', $property) }}">Элементы свойства</a>
                            <form action="{{ route('properties.destroy', $property) }}" method="POST">
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
        <a class="btn btn-success" type="button"
           href="{{ route('properties.create') }}">Добавить свойство</a>
    </div>
@endsection
