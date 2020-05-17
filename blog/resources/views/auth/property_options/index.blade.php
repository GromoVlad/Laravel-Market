@extends('auth.layout.master')
@section('style', 'categories')
@section('title', 'Администрирование: Элементы свойств')

@section('content')
    <div class="col-md-12">
        <h1>Элементы свойства: {{ $property->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Название_Eng</th>
                <th>Действия</th>
            </tr>

            @foreach($propertyOptions as $propertyOption)
                <tr>
                    <td>{{ $propertyOption->id }}</td>
                    <td>{{ $propertyOption->name }}</td>
                    <td>{{ $propertyOption->name_en }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button" href="{{ route('property_option.show', [$propertyOption->property, $propertyOption]) }}">Открыть</a>
                            <a class="btn btn-warning" type="button" href="{{ route('property_option.edit', [$propertyOption->property, $propertyOption]) }}">Редактировать</a>
                            <form action="{{ route('property_option.destroy',[$propertyOption->property, $propertyOption]) }}" method="POST">
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
           href="{{ route('property_option.create', $property) }}">Добавить элемент свойства</a>
    </div>
@endsection
