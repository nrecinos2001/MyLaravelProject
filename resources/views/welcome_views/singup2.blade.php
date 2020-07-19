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
        <form action="" class="py-5">
            @csrf
            <input type="text" placeholder="Ingresa tu nombre de usuario" class="border border-purple-300 my-3 py-1 px-1 rounded">
            <br>
            <i class="text-sm">Tu nombre de usuario ira concatenado a un @mup.siglas de tu universidad, por ejemplo: hector_10@mup.uca</i>
            <br>
            <select required name="country" id="" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <option selected >Selecciona tu carrera</option>
                <option value="">Ingenieria Informatica</option>
            </select>
            <br>
            <button class="bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">Ingresar</button>
        </form>
    </div>
</body>
</html>