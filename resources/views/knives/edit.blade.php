<h1>Редактировать нож</h1>

<form action="{{ route('knives.update', $knife->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="knife_name">Название</label>
        <input type="text" id="knife_name" name="knife_name" value="{{ $knife->knife_name }}" required>
    </div>

    <div>
        <label for="description">Описание</label>
        <textarea id="description" name="description" required>{{ $knife->description }}</textarea>
    </div>

    <div>
        <label for="price">Цена</label>
        <input type="text" id="price" name="price" value="{{ $knife->price }}" required>
    </div>

    <div>
        <label for="image">Изображение</label>
        <input type="text" id="image" name="image" value="{{ $knife->image }}" required>
    </div>

    <button type="submit">Обновить</button>
</form>
