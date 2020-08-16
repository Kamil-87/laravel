<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@section('title') Страница | @show</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="{{ asset('js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @yield('menu')
    @yield('content')
</body>
</html>
