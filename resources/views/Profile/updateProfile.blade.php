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
        <form action="" method="POST">
            <div class="w-1/2 mx-auto grid grid-cols-1 lg:grid-cols-1">
                <strong class="my-2">Actualizar información</strong>
                <label for="">Actualizar nombre</label>
                <input required type="text" placeholder="Ingresa tu nombre" name="name" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar apellido</label>
                <input required type="text" placeholder="Ingresa tu apellido" name="last_name" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar Correo</label>
                <input required type="email" placeholder="Ingresa tu correo electronico" name="email" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar contraseña</label>
                <input required type="password" placeholder="Ingresa tu contraseña" name="passWord" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar carné</label>
                <input required type="text" placeholder="Ingresa tu Carne" name="student_id" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar país</label>
                <select required name="country" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu pais</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                <label for="">Actualizar genero</label>
                <select required name="gender" id="" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="P">Personalizado</option>
                </select>
                <label for="">Actualizar universidad</label>
                <select required name="university" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu universidad</option>
                    @foreach ($universities as $university)
                    <option value="{{$university->id}}">{{$university->name}}</option>
                    @endforeach
                </select>
                <label for="">Actualizar carrera</label>
                <select required name="career" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu carrera</option>
                    @foreach ($careers as $career)
                    <option value="{{$career->id}}">{{$career->name}}</option>
                    @endforeach
                </select>
                <label for="">Actualizar facultad</label>
            {{--  --}}
                <select required name="faculty" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu Facultad</option>
                    @foreach ($faculties as $faculty)
                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                    @endforeach
                </select>
                <label for="">Actualizar nombre de usuario</label>
                {{-- Username --}}
                <input type="text" placeholder="Ingresa tu nombre de usuario" name="username" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <label for="">Actualizar foto de perfil</label>
                {{--Profile Picture--}}
                <input type="file" placeholder="Foto de perfil" name="profilepic" accept="image/*" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
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
                    @foreach ($socialmedia as $social)
                        <option value="{{$social->id}}">{{$social->socialName}}</option>
                    @endforeach
                </select>
                <br>
                <label for="link">Ingresar el enlace de tu perfil</label>
                <input type="text" id="link" name="linkforusermedia" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
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