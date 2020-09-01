<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hiddenE{
            display: none;
        }
    </style>
    <title>Administrador</title>
</head>
<body>
    <!--Navbar-->
<div class="container w-full bg-purple-500 flex text-white">
    <div class="mx-auto flex">
        <a href="">
            <img src="/images/logo_white.png" alt="Inicio" class="h-20 lg:mx-3 sm:w-20 mx-auto">
        </a>
        <strong class="my-auto">-Administrador</strong>
    </div>
</div>
<div class="lg:w-3/4 mx-auto sm:w-full text-center">

    {{--Añadir universidad --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5" onclick="showUadd()">
        Añadir universidad
    </button>
    <br>
    @if (session('uStored'))
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Universidad almacenada con éxito!
        </div>
        <br>
    @endif
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="universities">
        <form action="/admin/add/University/" method="POST">
            @csrf
            <p>Ingresar el nombre de la universidad</p>
            <input type="text" name="u_name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <p>Ingresar el color de la universidad</p>
            <input type="text" name="u_color" class="border rounded w-1/2 text-center h-10" placeholder="Según TailWindCSS">
            <p>Ingresar las siglas de la universidad</p>
            <input type="text" name="u_abbr" class="border rounded w-1/2 text-center h-10" placeholder="Siglas">
            <p>Seleccionar el país</p>
            <select name="country" id="" class="border rounded w-1/2 h-10">
                <option selected disabled>-Seleccione un país-</option>
                @foreach ($country as $coun)
                <option value='{{$coun->id}}'>{{$coun->name}}</option>
                @endforeach
            </select>
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>

    {{-- AÑADIR MATERIA --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mb-5" onclick="showSadd()">
        Añadir Materia
    </button>
    <br>
    @if (session('subStored'))
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Materia almacenada con éxito!
        </div>
        <br>
    @endif
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="subjects">
        <form action="/admin/add/Subject/" method="POST">
            @csrf
            <p>Ingresar el nombre de la materia</p>
            <input type="text" name="sub_name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>

    {{-- Añadir Facultad --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mb-5" onclick="showFadd()">
        Añadir facultad
    </button>
    <br>
    @if (session('facStored'))
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Facultad almacenada con éxito!
        </div>
        <br>
    @endif
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="faculty">
        <form action="/admin/add/Faculty/" method="POST">
            @csrf
            <p>Ingresar el nombre de la facultad</p>
            <input type="text" name="fac_name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>

    {{-- Añadir Carrera --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mb-5" onclick="showCAadd()">
        Añadir Carrera
    </button>
    <br>
    @if (session('cStored'))
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Carrera almacenada con éxito!
        </div>
        <br>
    @endif
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="career">
        <form action="/admin/add/Career/" method="POST">
            @csrf
            <p>Ingresar el nombre de la carrera</p>
            <input type="text" name="car_name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>
    {{-- Añadir País --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mb-5" onclick="showCOadd()">
        Añadir País
    </button>
    <br>
    @if (session('counStored'))
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡País almacenado con éxito!
        </div>
        <br>
    @endif
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="country">
        <form action="/admin/add/Country/" method="POST">
            @csrf
            <p>Ingresar el nombre del país</p>
            <input type="text" name="country_name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>
</div>


<script>
    function showUadd() {
        document.getElementById('universities').classList.toggle("hiddenE");
    }
    function showSadd() {
        document.getElementById('subjects').classList.toggle("hiddenE");
    }
    function showFadd() {
        document.getElementById('faculty').classList.toggle("hiddenE");
    }
    function showCAadd() {
        document.getElementById('career').classList.toggle("hiddenE");
    }
    function showCOadd() {
        document.getElementById('country').classList.toggle("hiddenE");
    }
</script>
</body>
</html>