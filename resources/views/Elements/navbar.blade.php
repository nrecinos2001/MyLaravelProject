<!--Navbar-->
<div class="container bg-purple-500 lg:flex">
    <a href="">
        <img src="/images/logo_white.png" alt="Inicio" class="w-20 h-20 mx-3">
    </a>
    <form action="/search/results" action="POST" class="text-purple-500 mx-auto my-auto sm:mx-auto">
        <input type="text" name="searched" placeholder="Ingrese el usuario a buscar" class="mx-1 my-2 px-2 py-2 rounded lg:w-64 text-center">
        <button class="bg-white mx-1 my-2 px-2 py-2 hover:bg-purple-200 rounded">Buscar</button>
    </form>
    <div>
        <a href="/profile/me" class="flex my-auto py-auto sm:w-auto">
            <img src="/images/Profile_Pics/nrecinos.jpg" alt="Profile Pic" class="rounded-full w-20 h-20 sm:mx-auto">
             <br>
            <p class="mx-1 my-auto px-1 py-auto text-white sm:mx-auto">{{$info['name']}}</p>
        </a>
    </div>
</div>