@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Новости</h3>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
