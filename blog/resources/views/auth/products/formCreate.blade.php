@extends('auth.layout.master')

@section('content')
    <div class="col-md-12">
        <h1>Добавить товар</h1>
        {{-- dump($products) --}}
        <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
            <div>
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'code'])
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'name'])
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72" rows="7"></textarea>
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'description'])
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'price'])
                <br>
                <div class="input-group row">
                    <label for="count" class="col-sm-2 col-form-label">Количество: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="count" id="count">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'count'])
                <br>
                @foreach(['new' => 'Новинка', 'hit' => 'Хит', 'recommend' => 'Рекомендуемый'] as $field => $title)
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">{{$title}}</label>
                        <div class="col-sm-1">
                            <input type="checkbox" class="form-control" name="{{$field}}" id="{{$field}}">
                        </div>
                    </div>
                    <br>
                    @include('auth.layout.error', ['fieldName' => $field])
                @endforeach
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection