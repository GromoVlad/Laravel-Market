@extends('auth.layout.master')

@section('title', 'Создать элемент свойства')

@section('content')
    <div class="col-md-12">
        <h2>Добавить параметр к свойству {{$property->name}}</h2>
        <form method="POST" enctype="multipart/form-data" action="{{ route('property_option.store', $property) }}">
            <div>
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название_Eng: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name_en" id="name_en">
                    </div>
                </div>
                @error('name_en')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>

                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
