@extends("layouts.main")

@section('title')
    @parentНовость
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card">
                @if($news)
                    <h3 class="card-header">{{ $news['title'] }}</h3>
                    <div class="card-body">
                        <p>{{ $news['text'] }}</p>
                    </div>
                @else
                    <h3>Нет такой новости</h3>
                @endif
            </div>
        </div>
    </div>

@endsection
