<h1>Редактировать контакт</h1>

@if ($errors->any())
    <div>
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
        <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
    </div>
    <div>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" required>
    </div>
    <div>
        <button type="submit">Сохранить</button>
    </div>
</form>
