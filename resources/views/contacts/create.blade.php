<h1>Создать контакт</h1>

@if ($errors->any())
    <div>
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
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
    </div>
    <div>
        <button type="submit">Сохранить</button>
    </div>
</form>
