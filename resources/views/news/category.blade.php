@include('menu')

@forelse ($news as $item)
    @if(!$item['isPrivate'])
        <h3>{{ $item['title'] }}</h3>
        <p>{{ $item['text'] }}</p>
    @endif
@empty
    <h3>Нет такой категории</h3>
@endforelse

