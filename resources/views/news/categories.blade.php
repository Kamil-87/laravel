@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')
    <h2>Выбирайте интересующую категорию</h2>

    @foreach ($categories as $category)
        <a href="{{ route('news.category.show', $category['slug']) }}">
            <h3>{{ $category['title'] }}</h3>
        </a>
    @endforeach
@endsection
