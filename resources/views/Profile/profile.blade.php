<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <style>
        .bw-social{
            filter: grayscale(85%);
        }
    </style>
    <title>Me!</title>
</head>
<body>
    @foreach ($users as $user)
    @include('Elements.navbar')
    <div class="container bg-{{$user->university->color}} lg:w-3/4 mx-auto my-3 text-white rounded lg:flex sm:w-full">
        <div class="bg-white lg:w-1/4 h-64 sm:w-full">
            <img src="{{asset("storage/Universities/{$user->university->logo}")}}" alt="" class="lg:w-auto h-64 sm:w-full mx-auto">
        </div>
        <div class="lg:w-1/2 rounded my-auto sm:w-full text-center">
            <p class="text-base mx-5">{{$user->career->name}} | {{$user->faculty->name}} <br> {{$user->university->name}}</p>
            <ul class="text-base mx-5 italic mt-3">
                <li class="mx-auto"> <a href="/profile/me/myScores">Ver mis notas. </a></li>
            </ul>
        </div>
        <input type="hidden" name="idUs" value"{{$user->id_student}}">
        <div class="w-auto mx-auto text-center my-auto">
            @if(!is_null($user->image))
                <img src="{{asset("storage/profile/{$user->image}")}}" alt="{{$user->name}} {{$user->lastname}}" class="w-20 h-20 lg:mx-auto rounded-full mx-auto">                
            @else
                <img src="{{asset("storage/profile/defaultprofpic.jpg")}}" alt="{{$user->name}} {{$user->lastname}}" class="w-20 h-20 lg:mx-auto rounded-full mx-auto">                
            @endif
            <p class="font-bold text-xl mx-5 mt-3">
                {{$user->name}} {{$user->lastname}}
            </p>
            <p class="text-sm mx-5">{{$user->username}}</p>
            @include('Elements.socialMediaBar')
            <a href="{{route('update')}}">
                <p class="text-sm mx-5">Actualizar información personal</p>
            </a>
            @if ($user->isadmin == 'y')
                <a href="{{route('adminAccess')}}">
                    <i class="text-sm">Admin Panel</i>
                </a> 
            @endif
        </div>
    </div>
    <div class="lg:w-1/2 mx-auto my-auto sm:w-full">
        <h3 class="text-green-500 text-xl text-center">Progreso de la carrera</h3>
        <br>
    </div>
    <div class="lg:flex lg:w-2/4 h-64 ml-1/4 sm:w-full">
        @include('Elements.chart')
        {{-- <div class="lg:w-3/4 h-64 mx-auto sm:w-full">
        </div> --}}
    </div>
    @endforeach
</body>
</html>