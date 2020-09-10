<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Mis Notas</title>
</head>
<body>
    @foreach ($users as $user)
    @include('Elements.navbar')
    <div class="container w-1/2 flex mx-auto text-center text-black">
        <form action="/profile/me/myScores/add" method="GET" class="mx-auto">
            <p class="">
                Ingresa el numero de materias y el numero de ciclo.
            </p>
            <input type="number" name="nos" placeholder="Materias" class="border border-purple-700 rounded">
            <input type="number" name="cicle" placeholder="Ciclo" class="border border-purple-700 rounded">
            <br>
            <button class="text-white bg-green-400 lg:w-auto lg:mx-1 my-2 lg:px-2 py-2 hover:bg-green-200 rounded w-1/4 mx-1">
                Añadir materias
            </button>
        </form>
    </div>

    @if($numbers < 1)
    <div class="w-3/4 lg:flex lg:grid lg:grid-cols-2 mx-auto text-center h-auto">
        @include('Elements.chartScores')
    </div>
    @else
    <div class="text-center w-1/2 text-purple-500 mx-auto">
        <p class="italic text-lg">No has agregado ninguna materia</p>
    </div>
    @endif
    @endforeach
</body>
</html>