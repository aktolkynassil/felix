<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог ножей</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .knife-card img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
        .knife-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Навигация с пользователем -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('knives.index') }}">Каталог ножей</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <!-- Профиль и Логаут -->
                @auth
                    <li class="nav-item">
                        <span class="navbar-text">Привет, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-3" href="{{ route('profile.edit') }}">Профиль</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger ms-3">Логаут</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-primary ms-3" href="{{ route('login') }}">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary ms-3" href="{{ route('register') }}">Регистрация</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Кнопка для добавления нового ножа -->
<div class="container mt-5">
    <a href="{{ route('knives.create') }}" class="btn btn-success mb-4">Добавить новый нож</a>

    <!-- Форма поиска -->
    <form method="GET" action="{{ route('knives.index') }}">
        <div class="input-group mb-4">
            <input type="text" name="search" class="form-control" placeholder="Найти нож..." aria-label="Найти нож...">
            <button class="btn btn-primary" type="submit">Поиск</button>
        </div>
    </form>

    <h2 class="text-center mb-4">Каталог ножей</h2>

    <div class="row">
        @foreach ($knives as $knife)
            <div class="col-md-4 mb-4">
                <div class="knife-card">
                    <h5>{{ $knife->knife_name }}</h5>
                    <p>{{ $knife->description }}</p>
                    <p><strong>Цена:</strong> {{ $knife->price }} ₽</p>
                    <img src="{{ $knife->image }}" alt="{{ $knife->knife_name }}" class="img-fluid" />

                    <div class="mt-3">
                        <a href="{{ route('knives.edit', $knife->id) }}" class="btn btn-warning">Редактировать</a>

                        <form action="{{ route('knives.destroy', $knife->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
