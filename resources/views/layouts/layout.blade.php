<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <header>
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/contacts">Контакты</a></li>
            <li><a href="/welcome">Добро пожаловать</a></li>
        </ul>
    </header>
    <div class="content">
        {{-- @yield('content') --}}
        @section('content')
        @show
    </div>


    <footer>
        <li><a href="/">Главная</a></li>
        <li><a href="/contacts">Контакты</a></li>
        <li><a href="/welcome">Добро пожаловать</a></li>

    </footer>
</body>

</html>
