<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="icon" type="image/png" href="/images/logo.png">
    <title>Registrate - My University Progress</title>
</head>
<body>
    <div class="container mx-auto bg-white text-purple-500 lg:w-1/2 my-10 flex flex-col text-center rounded">
        <img src="/images/logo.png" class="w-48 py-5 mx-auto">
        <h1 class="font-bold text-xl">
            <a href="/">My University Progress</a>
            <br>
            <p>Registrate</p>
        </h1>
        
        <form action="{{ route('register') }}" method="POST" class="py-5" enctype="multipart/form-data">
            @csrf
            <div class="container grid grid-cols-1 lg:grid-cols-2">
                <input required type="text" placeholder="Ingresa tu nombre" name="name" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <input required type="text" placeholder="Ingresa tu apellido" name="last_name" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <input required type="email" placeholder="Ingresa tu correo electronico" name="email" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <input required type="password" placeholder="Ingresa tu contraseña" name="password" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <input required type="text" placeholder="Ingresa tu Carne" name="student_id" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                <select required name="country" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu pais</option>
                    @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                <select required name="gender" id="" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="P">Personalizado</option>
                </select>
                <select required name="university" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu universidad</option>
                    @foreach ($universities as $university)
                    <option value="{{$university->id}}">{{$university->name}}</option>
                    @endforeach
                </select>
                <select required name="career" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu carrera</option>
                    @foreach ($careers as $career)
                    <option value="{{$career->id}}">{{$career->name}}</option>
                    @endforeach
                </select>
                {{--  --}}
                <select required name="faculty" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                    <option selected disabled>Selecciona tu Facultad</option>
                    @foreach ($faculties as $faculty)
                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                    @endforeach
                </select>
                {{-- Username --}}
                <input type="text" placeholder="Ingresa tu nombre de usuario" name="username" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
                {{--Profile Picture--}}
                <input type="file" placeholder="Foto de perfil" name="profilepic" accept="image/*" class="border border-purple-300 sm:my-2 my-3 py-1 mx-3 px-1 rounded">
            </div>
            
            <br>
            <button class="bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">
                Paso Siguiente
            </button>
        </form>
        <p>
            Al registrarte aceptas las normas comunitarias que nuestro sitio ofrece a sus usuarios.
            ¡Esperamos tengas una buena experiencia!
        </p>
    </div>
</body>
</html>