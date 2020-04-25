@extends('layout.master')
@section('style', 'categories')
@section('title', __('main.category'))

@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code)}}">
                <img src="{{ Storage::url($category->image) }}">
                <h2>{{$category->__('name')}}</h2>
            </a>
            <p>{{$category->__('description')}}</p>
        </div>
    @endforeach
@endsection
