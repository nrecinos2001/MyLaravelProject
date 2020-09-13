<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Actualizar información</title>
</head>
<body>
    @foreach ($users as $user)
    @include('Elements.navbar')
    <div class=" container lg:grid lg:grid-cols-2">
        <form action="{{route('updatingUser')}}" method="POST">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="id_user">
            <div class="w-1/2 mx-auto grid grid-cols-1 lg:grid-cols-1">
                <strong class="my-2">Actualizar información</strong>
                {{-- Name --}}
                <label for="name">Actualizar nombre</label>
                <input required type="text" id="name" placeholder="Ingresa tu nombre" name="name" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded" value="{{$user->name}}">
                {{-- Lastname --}}
                <label for="lastname">Actualizar apellido</label>
                <input required type="text" id="lastname" placeholder="Ingresa tu apellido" name="lastname" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded" value="{{$user->lastname}}">
                {{-- Email --}}
                <label for="email">Actualizar Correo</label>
                <input required type="email" id="email" placeholder="Ingresa tu correo electronico" name="email" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded" value="{{$user->email}}">
                {{-- Password --}}
                {{-- <label for="pasword">Actualizar contraseña</label>
                <input required type="password" id="password" placeholder="Ingresa tu contraseña" name="passWord" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded"> --}}
                {{-- Carne, Student_id --}}
                <label for="sId">Actualizar carné</label>
                <input required type="text" id="sId" placeholder="Ingresa tu Carne" name="student_id" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded" value="{{$user->id_student}}">
                {{-- Country --}}
                <label for="country">Actualizar país</label>
                <select required name="country" id="country" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected value="{{$user->country_id}}">No cambiar</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                {{-- Gender --}}
                <label for="gender">Actualizar genero</label>
                <select required name="gender" id="gender" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected value="{{$user->gender}}">No cambiar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="P">Personalizado</option>
                </select>
                {{-- University --}}
                <label for="university">Actualizar universidad</label>
                <select required name="university" id="university" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected value="{{$user->university_id}}">No Cambiar</option>
                    @foreach ($universities as $university)
                    <option value="{{$university->id}}">{{$university->name}}</option>
                    @endforeach
                </select>
                {{-- Career --}}
                <label for="career">Actualizar carrera</label>
                <select required name="career" id="career" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected value="{{$user->career_id}}">No cambiar</option>
                    @foreach ($careers as $career)
                    <option value="{{$career->id}}">{{$career->name}}</option>
                    @endforeach
                </select>
                {{-- Faculty --}}
                <label for="faculty">Actualizar facultad</label>
                <select required name="faculty" id="faculty" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected value="{{$user->faculty_id}}">No cambiar</option>
                    @foreach ($faculties as $faculty)
                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                    @endforeach
                </select>
                {{-- Username --}}
                <label for="username">Actualizar nombre de usuario</label>
                <input type="text" id="username" placeholder="Ingresa tu nombre de usuario" name="username" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded" value="{{$user->username}}">
                <br>
                <button class="w-1/2 mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">
                    ¡Acualizar!
                </button>
                <br>
            </div>
        </form>
        
        <div class="text-center">
            <strong class="my-2">Agregar redes sociales</strong>
            <form action="{{route('addSM_user')}}" method="POST">
                @csrf
                <input type="hidden" value="1" name="user_id">
                <label for="socialmediaselect">Seleccione la red social</label>
                <select name="sm_id" id="socialmediaselect" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    @foreach ($socialmedia as $social)
                        <option value="{{$social->id}}">{{$social->socialName}}</option>
                    @endforeach
                </select>
                <br>
                <label for="link">Ingresar el enlace de tu perfil</label>
                <input type="text" id="link" name="link" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <br>
                <button class="w-1/4 mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">
                    Agregar
                </button>
            </form>

            <hr class="my-5 bg-purpe-600">

            <strong class="my-2">Actualizar redes sociales</strong>
            <form action="">
                <label for="socialmediaselect">Seleccione la red social</label>
                <select name="socialmedia" id="socialmediaselect" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    @foreach ($userMedia as $social)
                    {{-- @if($social->user_id == $user->id) --}}
                        <option value="{{$social->id}}">{{$social->socialmedia->socialName}}</option>
                    {{-- @endif --}}
                    @endforeach
                </select>
                <br>
                <label for="link">Ingresar el nuevo enlace de tu perfil</label>
                <input type="text" id="link" name="linkforusermedia" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <br>
                <button class="w-1/4 mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">
                    Actualizar
                </button>
            </form>
            <hr class="my-5 bg-purpe-600">
            <strong class="my-2">Actualizar foto de perfil</strong>
            <form action="">
                {{--Profile Picture--}}
                <label for="profpic">Actualizar foto de perfil</label>
                <input type="file" name="profilepic" id="profpic" accept="image/*" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <br>
                <button class="w-1/4 mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">
                    Actualizar
                </button>
            </form>
        </div>
    </div>
    @endforeach
</body>
</html>