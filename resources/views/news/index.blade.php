@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')
    <h1>Новости</h1>

    @forelse ($news as $item)
        <div>
            <span>{{ $item['title'] }}</span>
            @if(!$item['isPrivate'])
                <a href="{{ route('news.show', $item['id']) }}">Подробнее...</a><br>
            @endif
        </div>
    @empty
        <h3>Нет новостей</h3>
    @endforelse
@endsection
