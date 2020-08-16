@extends("layouts.main")

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include("menu")
@endsection

@section('content')
    <h1>Vue</h1>
    <div id="app">
        <example-component></example-component>
    </div>
@endsection
