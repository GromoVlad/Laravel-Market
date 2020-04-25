@extends('auth.layout.master')

@section('title', 'Создать категорию')

@section('content')
    <div class="col-md-12">
        <h2>Добавить категорию</h2>
        <form method="POST" enctype="multipart/form-data" action="{{ route('categories.store') }}">
            <div>
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code">
                    </div>
                </div>
                @error('code')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name">
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
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72" rows="7"></textarea>
                    </div>
                </div>
                @error('description')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание_Eng: </label>
                    <div class="col-sm-6">
                        <textarea name="description_en" id="description_en" cols="72" rows="7"></textarea>
                    </div>
                </div>
                @error('description_en')
                <div class="alert alert-danger margin-top">{{$message}}</div>
                @enderror
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
