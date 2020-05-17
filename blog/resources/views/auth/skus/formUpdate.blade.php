@extends('auth.layout.master')

@section('title', 'Редактировать SKU: "' . $skus->name .'"')

@section('content')
    <div class="col-md-12">
        <h2>Редактировать SKU: "{{$product->name}}"</h2>
        <form method="POST" enctype="multipart/form-data" action="{{  route('skus.update', [$product, $skus]) }}">
            <div>
                @method('PUT')
                @csrf
                @foreach($product->properties as $property)
                    <div class="input-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">{{ $property->name }} </label>
                        <div class="col-sm-6">
                            <select name="property_id[{{$property->id}}]" class="form-control">
                                @foreach($property->propertyOptions as $propertyOption)
                                    <option
                                        @if($skus->propertyOptions->contains($propertyOption->id))
                                        selected
                                        @endif
                                        value="{{$propertyOption->id}}">{{$propertyOption->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach
                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="price" value="{{$skus->price}}">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'price'])
                <br>
                <div class="input-group row">
                    <label for="count" class="col-sm-2 col-form-label">Количество: </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="count" value="{{$skus->count}}">
                    </div>
                </div>
                @include('auth.layout.error', ['fieldName' => 'count'])
                <br>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
