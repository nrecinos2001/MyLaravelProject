<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Me!</title>
</head>
<body>
    @include('Elements.navbar')
    
    <div class="container bg-blue-700 lg:w-3/4 mx-auto my-3 text-white rounded lg:flex sm:w-full">
        <div class="bg-white lg:w-1/4 h-64 sm:w-full">
            <img src="/images/Universities_Logos/UCA_ES.jpg" alt="" class="lg:w-auto h-64 sm:w-full mx-1/4">
        </div>
        <div class="lg:w-1/2 rounded my-auto sm:w-full text-center">
            <p class="text-base mx-5">{{$info['career']}} - Universidad {{$info['university']}} <br></p>
        </div>
        <div class="w-auto mx-auto text-center my-auto">
            <img src="/images/Profile_Pics/nrecinos.jpg" alt="{{$info['name']}}" class="w-20 h-20 lg:mx-auto rounded-full sm:mx-auto">
            <p class="font-bold text-xl mx-5 mt-3">{{$info['name']}}</p>
            <p class="text-sm mx-5">{{$info['username']}}</p>
        </div>
    </div>
    <div class="lg:flex w-full">
        <div class="lg:w-1/2 h-64 mx-auto sm:w-full">
            <h3 class="text-green-500 text-center py-auto">Progreso de la carrera</h3>
        </div>
        <div class="lg:w-1/2 h-64 mx-auto sm:w-full">
            @include('Elements.chars')
        </div>
    </div>
</body>
</html>