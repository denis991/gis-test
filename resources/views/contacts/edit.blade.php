@extends('contacts')

@section('contacts')
    @section('h1', 'Редактировать контакт')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contacts/{{ $contact->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ $contact->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $contact->email }}">
        </div>
        <div>
            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" value="{{ $contact->phone }}">
        </div>
        <div>
            <button type="submit">Сохранить</button>
        </div>
    </form>
@endsection
