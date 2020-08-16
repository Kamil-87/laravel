@extends("layouts.main")

@section('title')
    @parentКатегории
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Выбирайте интересующую категорию</h3>
                <div class="card-body">
                    @foreach ($categories as $category)
                        <a href="{{ route('news.category.show', $category['slug']) }}">
                            <h3>{{ $category['title'] }}</h3>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
