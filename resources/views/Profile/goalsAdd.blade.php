<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Agregar propósito</title>
</head>
<body>
@foreach ($users as $user)
@include('Elements.navbar')
    <div class="text-center my-2">
        <strong>
            Agregar propósito
        </strong>
    </div>
        
    <div class="text-center w-3/4 mx-auto my-2">
        <p class="italic text-sm my-2">La descripción no puede tener más de 191 espacios.</p>
        <form action="{{route('storeGoal')}}" method="POST">
            @csrf
            <input type="hidden" value="2" name="status">
            <input type="hidden" value="{{$user->id}}" name="user_id">
            <label for="name">Ingrese el nombre para su propósito</label>
            <br>
            <input type="text" id="name" name="name" class="border rounded mx-2 h-8 lg:w-1/4 sm:w-3/4">
            <br>
            <label for="cicle">Seleccione el ciclo para dicho propósito</label>
            <br>
            <input type="number" id="cicle" name="cicle" class="border rounded mx-2 h-8 lg:w-1/4 sm:w-3/4">
            <br>
            <label for="desc">Ingrese la descripción de su propósito</label>
            <br>
            <textarea name="description" id="desc" cols="40" rows="5" class="border rounded mx-2"></textarea>
            <br>
            <button class="text-white bg-green-400 lg:w-auto lg:mx-1 my-2 lg:px-2 py-2 hover:bg-green-200 rounded w-1/4 mx-1">
                Agregar
            </button>
        </form>
    </div>
@endforeach
</body>
</html>