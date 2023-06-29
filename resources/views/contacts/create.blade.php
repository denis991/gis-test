@extends('contacts')

@section('content')
    <h1>Создать новый контакт</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contacts" method="POST">
        @csrf
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        </div>
        <div>
            <button type="submit">Сохранить</button>
        </div>
    </form>
@endsection
