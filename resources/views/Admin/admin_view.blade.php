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
    {{-- Notificaciones --}}
    {{-- Universidad --}}
    @if (session('uStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Universidad almacenada con éxito!
        </div>
        <br>
    @endif
    {{-- Países --}}
    @if (session('sMediaStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Red social almacenada con éxito!
        </div>
        <br>
    @endif
    {{-- Materia --}}
    @if (session('subStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Materia almacenada con éxito!
        </div>
        <br>
    @endif
    {{-- Facultad --}}
    @if (session('facStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Facultad almacenada con éxito!
        </div>
        <br>
    @endif
    {{-- Carreras --}}
    @if (session('cStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡Carrera almacenada con éxito!
        </div>
        <br>
    @endif
    {{-- Países --}}
    @if (session('counStored'))
        <br>
        <div class="border border-purple-700 w-1/2 mx-auto text-center text-purple-700 my-1 p-1">
            ¡País almacenado con éxito!
        </div>
        <br>
    @endif


    {{--Añadir universidad --}}
    <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5" onclick="showUadd()">
        Añadir universidad
    </button>
    <br>
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="universities">
        <form action="/admin/add/University/" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Ingresar el nombre de la universidad</label>
            <br>
            <input type="text" name="u_name" id="name" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <label for="color">Ingresar el color de la universidad</label>
            <br>
            <input type="text" name="u_color" id="color" class="border rounded w-1/2 text-center h-10" placeholder="Según TailWindCSS">
            <br>
            <label for="abb">Ingresar las siglas de la universidad</label>
            <br>
            <input type="text" name="u_abbr" id="abb" class="border rounded w-1/2 text-center h-10" placeholder="Siglas">
            <br>
            <label for="countries">Seleccionar el país</label>
            <br>
            <select name="country" id="countries" class="border rounded w-1/2 h-10">
                <option selected disabled>-Seleccione un país-</option>
                @foreach ($country as $coun)
                <option value='{{$coun->id}}'>{{$coun->name}}</option>
                @endforeach
            </select>
            <br>
            <label for="logo">Seleccionar logo para la universidad</label>
            <br>
            <input type="file" name="logoU" accept="image/*" id="logo" class="border rounded w-1/2 text-center h-10">
            <br>
            <button class="mx-auto bg-blue-400 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded margin-white mt-5 mb-5">
                Agregar
            </button>
        </form>
    </div>
     {{--Añadir Red social --}}
     <button class="mx-auto bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white mb-5" onclick="showSMadd()">
        Añadir red social
    </button>
    <br>
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="socialmedia">
        <form action="/admin/add/SocialMedia/" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="smname">Ingresar el nombre de la red social</label>
            <br>
            <input type="text" name="socialName" id="smname" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
            <br>
            <label for="smphoto">Seleccionar logo de la red social</label>
            <br>
            <input type="file" name="socialPhoto" accept="image/*" id="smphoto" class="border rounded w-1/2 text-center h-10">
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
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="subjects">
        <form action="/admin/add/Subject/" method="POST">
            @csrf
            <label for="sub">Ingresar el nombre de la materia</label>
            <br>
            <input type="text" name="sub_name" id="sub" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
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
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="faculty">
        <form action="/admin/add/Faculty/" method="POST">
            @csrf
            <label for="fac">Ingresar el nombre de la facultad</label>
            <br>
            <input type="text" name="fac_name" id="fac" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
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
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="career">
        <form action="/admin/add/Career/" method="POST">
            @csrf
            <label for="career">Ingresar el nombre de la carrera</label>
            <br>
            <input type="text" name="car_name" id="career" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
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
    <div class="mx-auto border border-blue-500 mb-5 hiddenE" id="country">
        <form action="/admin/add/Country/" method="POST">
            @csrf
            <label for="country">Ingresar el nombre del país</label>
            <br>
            <input type="text" name="country_name" id="country" class="border rounded w-1/2 text-center h-10" placeholder="Nombre">
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
    function showSMadd() {
        document.getElementById('socialmedia').classList.toggle("hiddenE");
    }
</script>
</body>
</html>