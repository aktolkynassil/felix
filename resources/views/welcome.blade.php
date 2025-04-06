<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knives store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-500">
<div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-3xl font-semibold text-center mb-8">Welcome to the knives store!</h1>

        <div class="space-y-4">
            <a href="{{ route('register') }}" class="block text-center py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-800 transition duration-300">
                Register
            </a>
            <a href="{{ route('login') }}" class="block text-center py-2 px-4 bg-gray-700 text-white rounded hover:bg-gray-800 transition duration-300">
                Login
            </a>

        </div>
    </div>
</div>
</body>
</html>
