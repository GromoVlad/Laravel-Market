@extends('auth.layout.master')

@section('title', 'Редактировать элемент свойства: "' . $propertyOption->name .'"')

@section('content')
    <div class="col-md-12">
        <h2>Редактировать свойство: "{{ $property->name }}"</h2>
         <form method="POST" enctype="multipart/form-data" action="{{ route('property_option.update', [$property, $propertyOption]) }}">
            <div>
                @method('PUT')
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ $propertyOption->name }}">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название_Eng: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name_en" id="name_en"
                               value="{{ $propertyOption->name_en }}">
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
