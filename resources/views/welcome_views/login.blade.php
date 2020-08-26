<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Login - My University Progress</title>
</head>
<body>
    <div class="container mx-auto bg-white text-purple-500 lg:w-1/2 my-20 flex flex-col text-center rounded">
        <img src="/images/logo.png" class="w-48 py-5 mx-auto">
        <h1 class="font-bold text-xl">
            <a href="/">My University Progress</a>
        </h1>
        <form action="/profile/me" class="py-5" method="POST">
            @csrf
            <input type="text" placeholder="Usuario" name="user" class="border border-purple-300 my-3 py-1 px-1 rounded">
            <br>
            <input type="password" placeholder="Contraseña" name="password" class="border border-purple-300 my-3 py-1 px-1 rounded">
            <br>
            <button class="bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">Ingresar</button>
        </form>
        <a href=""><p class="hover:underline">¿Olvidaste tu contraseña?</p></a>
        |
    <a href="/singup/partOne" class="mb-4"><p class="hover:underline">Registrate</p></a>
    </div>
</body>
</html>