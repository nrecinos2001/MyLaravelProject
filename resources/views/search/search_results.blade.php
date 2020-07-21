<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado de las busqueda</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
</head>
<body class="bg-white text-white">
    @include('Elements.navbar')

<h3>Resultado de la busqueda:</h3>
<div class="lg:mx-auto lg:w-3/4">
    <div class=" border-blue-700 max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-64 lg:h-auto lg:w-56 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-1 text-center overflow-hidden" style="background-image: url('/images/Universities_Logos/UCA_ES.jpg')" title="Estudiante de UCA">
        </div>
        <div class="border-r border-b border-1 border-gray-400 lg:border-1-0 lg:border-t lg:border-gray-400 {{$info['color']}} rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-white font-bold text-xl mb-2">{{$info['name']}} - {{$info['username']}}</div>
                <p class="text-purple-100 text-base">
                    Estudiante de {{$info['career']}} en la Universidad
                    {{$info['university']}}, {{$info['country']}}.
                </p>
            </div>
            <div class="flex items-center">
                <img src="/images/Profile_Pics/nrecinos.jpg" alt="{{$info['name']}} Picture" class="w-32 h-32 rounded-full mr-4">
                <div class="text-sm">
                    <a href="">
                        <p class="text-purple-200 leading-none">{{$info['name']}} </p>
                    </a>
                    <a href="">
                        <p class="text-purple-100"> {{$info['career']}} </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>