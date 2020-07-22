<!--Navbar-->
<div class="container bg-purple-500 lg:flex">
    <a href="">
        <img src="/images/logo_white.png" alt="Inicio" class="h-20 lg:mx-3 sm:w-20 mx-auto">
    </a>
    <form action="/search/results" action="POST" class="text-purple-500 lg:mx-auto my-auto">
        @csrf
        <input type="text" name="searched" placeholder="Ingrese el usuario a buscar" class="lg:mx-1 my-2 px-2 py-2 rounded lg:w-64 text-center sm:w-3/4 pl-auto">
        <button class="bg-white lg:w-auto mx-1 my-2 px-2 py-2 hover:bg-purple-200 rounded sm:w-1/4 mr-4">Buscar</button>
    </form>
        <a href="/profile/me" class="flex lg:mr-3 my-auto py-auto sm:mr-3">
            <img src="/images/Profile_Pics/nrecinos.jpg" alt="Profile Pic" class="rounded-full w-20 h-20 lg:mx-auto">
             <br>
            <p class="lg:mx-1 my-auto px-1 py-auto text-white">{{$info['name']}}</p>
        </a>
</div>