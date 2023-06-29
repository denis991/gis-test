@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')
    <h1>Добро пожаловать на главную страницу</h1>
    <p>Здесь вы можете найти ссылки на другие страницы:</p>
    <ul>
        <li><a href="/contacts">Контакты</a></li>
        <li><a href="/welcome">Добро пожаловать</a></li>
    </ul>
@endsection
