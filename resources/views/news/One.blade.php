@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')
    @if($news)
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['text'] }}</p>
    @else
        <h3>Нет такой новости</h3>
    @endif
@endsection
