<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Knife</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giWFb+Yxdzgt1qpFi3r8jl+NsqOZQw8Yk6jfwGq5miYOf5r5q3o88jOGgLw5/0h7" crossorigin="anonymous">

    <style>
        body {
            background-color: #FFEBEE;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .form-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            margin-top: 10px;
            height: 48px;
            border: 2px solid #eee;
            border-radius: 10px;
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #039BE5;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .agree-text {
            font-size: 12px;
        }

        .terms {
            font-size: 12px;
            text-decoration: none;
            color: #039BE5;
        }

        .confirm-button {
            height: 50px;
            border-radius: 10px;
        }

        .radio {
            cursor: pointer;
            width: 100%;
        }

        .radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .radio span {
            padding: 7px 14px;
            border: 2px solid #eee;
            display: inline-block;
            color: #039be5;
            border-radius: 10px;
            width: 100%;
            height: 48px;
            line-height: 27px;
        }

        .radio input:checked+span {
            border-color: #039BE5;
            background-color: #81D4FA;
            color: #fff;
            border-radius: 9px;
            height: 48px;
            line-height: 27px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h1 class="form-title">Добавить новый нож</h1>

        <form action="{{ route('knives.store') }}" method="POST">
            @csrf

            <h6 class="information mt-4">Fill out the form</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="knife_name" class="form-label">Название</label>
                        <input class="form-control" type="text" id="knife_name" name="knife_name" placeholder="Название ножа" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description" class="form-label">Описание</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Описание ножа" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="price" class="form-label">Цена</label>
                        <input class="form-control" type="text" id="price" name="price" placeholder="Цена ножа" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="image" class="form-label">URL изображения</label>
                        <input class="form-control" type="text" id="image" name="image" placeholder="Ссылка на изображение ножа" required>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
                <small class="agree-text">Отправляя эту форму, вы соглашаетесь с нашими</small>
                <a href="#" class="terms">Условиями использования</a>
            </div>

            <button type="submit" class="btn btn-primary confirm-button">Создать нож</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7iq2P+ZTjKQ/szZq4g7LR/jK3Tqjwq0Xs5ggQJhvBa3vIbvptlLZC4gxyYc6qO0V" crossorigin="anonymous"></script>
</body>
</html>
