<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Mis Metas</title>
    <style>
        .done{
            background: #32ba7d5b;
        }
        .notdone{
            background: #f152495b;
        }
        .while{
            background: rgba(94, 74, 74, 0.055);
        }
    </style>
</head>
<body>
    @foreach ($users as $user)
    @include('Elements.navbar')
    @if ($tG ==  0)
    <div class="text-center mt-2">
        <strong class="text-center italic text-xl">Mis propósitos</strong>
        <br>
        <strong class="text-center text-xl">Todavía no hay propósitos :(</strong>
        <br>
        <a href="{{route('showGoalsAdding')}}" class="text-green-600 hover:underline italic">
            Añadir propósito
        </a>
    </div>
    @else
    <div class="text-center mt-2">
        <strong class="text-center italic text-xl">Mis propósitos</strong>
        <br>
        <a href="{{route('showGoalsAdding')}}" class="text-green-600 hover:underline italic">
            Añadir propósito
        </a>
    </div>
    @for($i = 0; $i < $higher; $i++)
    <div class="text-center">
        <p class="text-putple-500 italic">
            Propósitos Ciclo {{$i+1}}
        </p>
    </div>
    @foreach ($goals as $goal)
        @if ($goal->cicle == ($i+1))
        @if($goal->state == 2)
        <div class="w-4/5 mx-auto my-2 while flex rounded">
            <div class="w-4/5">
                <strong>{{$goal->name}}</strong>
                <p>{{$goal->description}}</p>
            </div>
            <div class="w-auto flex mx-auto my-auto">
                <form action="{{route('updatingGoal')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$goal->id}}" name="goal_id">
                    <input type="hidden" value="1" name="status">
                    <input type="image" src="/images/goals/done.png" class="w-10 mx-2">
                </form>
                <form action="{{route('updatingGoal')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$goal->id}}" name="goal_id">
                    <input type="hidden" value="0" name="status">
                    <input type="image" src="/images/goals/notdone.png" class="w-10 m-x2">
                </form>
            </div>
        </div>
        @elseif($goal->state == 1)
        <div class="w-4/5 mx-auto my-2 done flex rounded">
            <div class="w-4/5">
                <strong>{{$goal->name}}</strong>
                <p>{{$goal->description}}</p>
            </div>
            <div class="w-auto flex mx-auto my-auto">
                <img src="/images/goals/done.png" class="w-10 m-x2">
            </div>
        </div>
        @else
        <div class="w-4/5 mx-auto my-2 notdone flex rounded">
            <div class="w-4/5">
                <strong>{{$goal->name}}</strong>
                <p>{{$goal->description}}</p>
            </div>
            <div class="w-auto flex mx-auto my-auto">
                    <img src="/images/goals/notdone.png" class="w-10 mx-2">
            </div>
        </div>
        @endif   
        @endif
    @endforeach
    @endfor
    @endif
    @endforeach
</body>
</html>