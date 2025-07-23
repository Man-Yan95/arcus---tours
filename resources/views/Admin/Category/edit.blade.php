@extends('layouts.admin')

@section('content')
    <h1>Խմբագրել {{ $category->titleRu }}</h1>

    <form action="{{ route('admin.category.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="titleRu" value="{{ $category->titleRu }}">
        <input type="text" name="titleEn" value="{{ $category->titleEn }}">
        <input type="text" name="price" value="{{ $category->price }}">
        <input type="text" name="article" value="{{ $category->article }}">
        <textarea name="descriptionRu">{{ $category->descriptionRu }}</textarea>
        <textarea name="descriptionEn">{{ $category->descriptionEn }}</textarea>
        <!-- մնացած դաշտերը -->
        <button type="submit">Թարմացնել</button>
    </form>
@endsection
