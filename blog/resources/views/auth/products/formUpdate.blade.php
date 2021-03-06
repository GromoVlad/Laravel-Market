@extends('auth.layout.master')
@section('title', 'Редактировать товар: ' . $product->name)
@section('content')
    <div class="col-md-12">
        <h1>Редактировать товар: <b>"{{ $product->name }}"</b></h1>
        <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', $product) }}">
            <div>
                @method('PUT')
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code" value="{{ $product->code }}">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'code'])
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'name'])
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название_Eng: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="{{ $product->name_en }}">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'name_en'])
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option @if($category->id === $product->category_id) selected
                                        @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72"
                                  rows="7">{{ $product->description }}</textarea>
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'description'])
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание_Eng: </label>
                    <div class="col-sm-6">
                        <textarea name="description_en" id="description_en" cols="72"
                                  rows="7">{{ $product->description_en }}</textarea>
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'description_en'])
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
                    <label class="col-sm-2 col-form-label">Свойства: </label>
                    <div class="col-sm-10">
                        @foreach($properties as $property)
                            <label class="label_checkbox">
                                {{$property->name}}
                                <input class="" type='checkbox' name='property_id[]' value='{{$property->id}}'
                                    @foreach($product->properties->map->id as $propertyId)
                                        @if ($propertyId === $property->id)
                                            checked
                                        @endif
                                    @endforeach
                                >
                            </label>
                        @endforeach
                    </div>
                </div>
                <br>
                @include('auth.layout.error', ['fieldName' => 'property_id'])
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Сортировка</label>
                    <div class="col-sm-10">
                        @foreach(['new' => 'Новинка', 'hit' => 'Хит', 'recommend' => 'Рекомендуемый'] as $field => $title)
                            <label class="label_checkbox">
                                {{$title}}
                                <input type="checkbox" class="form-control" name="{{$field}}" id="{{$field}}"
                                       @if(isset($product) && $product->$field === 1)
                                       checked
                                    @endif
                                >
                            </label>
                        @endforeach
                    </div>
                </div>
                <br>
                @include('auth.layout.error', ['fieldName' => $field])
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

