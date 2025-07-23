@extends('layouts.admin')

@section('content')
    <h1>Կատեգորիաների Ցանկ</h1>

    <a href="{{ route('Admin.Category.create') }}">Ավելացնել նոր կատեգորիա</a>

    @foreach ($category as $category)
        <div>
            <h3>{{ $category->titleRu }} / {{ $category->titleEn }}</h3>
            <a href="{{ route('admin.category.edit', $category) }}">Խմբագրել</a>
            <form action="{{ route('admin.category.destroy', $category) }}" method="POST" style="display:inline-block">
                @csrf
                @method('DELETE')
                <button type="submit">Ջնջել</button>
            </form>
        </div>
    @endforeach

    {{ $category->links() }}
@endsection
