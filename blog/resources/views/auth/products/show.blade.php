@extends('auth.layout.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>Поле</th>
                <th>Значение</th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Название_Eng</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Описание_Eng</td>
                <td>{{ $product->description_en }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Относится к подкатегориям</td>
                <td>
                    @foreach(['new' => 'Новинка', 'hit' => 'Хит', 'recommend' => 'Рекомендуемый'] as $field => $title)
                        @if($product->$field === 1)
                            <span class="badge badge-success"> {{$title}}</span>
                        @endif
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
