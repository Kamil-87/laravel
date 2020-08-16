@include('menu')

<h2>Выбирайте интересующую категорию</h2>

@foreach ($categories as $category)
    <a href="{{ route('news.category.show', $category['slug']) }}">
        <h3>{{ $category['title'] }}</h3>
    </a>
@endforeach
