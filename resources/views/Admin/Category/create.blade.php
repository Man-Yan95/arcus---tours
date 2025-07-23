@extends('layouts.admin')

@section('content')
    <h1>Նոր կատեգորիա</h1>

    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <input type="text" name="titleRu" placeholder="Վերնագիր ռուսերենով">
        <input type="text" name="titleEn" placeholder="Վերնագիր անգլերենով">
        <input type="text" name="price" placeholder="Գին">
        <input type="text" name="article" placeholder="Արտիկուլ">
        <textarea name="descriptionRu" placeholder="Նկարագրություն Ռու"></textarea>
        <textarea name="descriptionEn" placeholder="Նկարագրություն Eng"></textarea>
        <!-- մյուս դաշտերն էլ ավելացրու ըստ ցանկության -->
        <button type="submit">Պահպանել</button>
    </form>
@endsection
