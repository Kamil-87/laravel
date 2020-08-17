@extends("layouts.main")

@section('title')
    @parentКатегория
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card">
                @forelse ($news as $item)
                    @if(!$item['isPrivate'])
                        <h3 class="card-header">{{ $item['title'] }}</h3>
                        <p class="card-body">
                            {{ $item['text'] }}
                        </p>
                    @endif
                @empty
                    <h3>Нет такой категории</h3>
                @endforelse
            </div>
        </div>
    </div>

@endsection
