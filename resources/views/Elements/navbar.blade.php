<!--Navbar-->
<div class="container bg-purple-500 lg:flex">
    <div class="lg:w-auto">
        <a href="">
            <img src="/images/logo_white.png" alt="Inicio" class="h-20 lg:mx-3 sm:w-20 mx-auto">
        </a>
    </div>
    <div class="text-purple-500 mx-auto lg:w-auto my-auto sm:w-3/4">
        <form action="/search/results" action="POST" class="flex">
            @csrf
            <input type="text" name="name" placeholder="Ingrese el usuario a buscar" class="lg:mx-1 my-2 px-2 py-2 rounded lg:w-64 text-center w-3/4">
            <button class="bg-white lg:w-auto lg:mx-1 my-2 lg:px-2 py-2 hover:bg-purple-200 rounded w-1/4 mx-1">Buscar</button>
        </form>
    </div>
    <div class="lg:mr-0 text-center lg:w-auto flex my-auto py-auto sm:w-full">
        <a href="{{route('myProfile')}}" class="flex">
            @if (!is_null($user->image))
                <img src="{{asset("storage/profile/{$user->image}")}}" alt="Profile Pic" class="rounded-full w-20 h-20 mx-auto">                    
            @else
                <img src="{{asset("storage/profile/defaultprofpic.jpg")}}" alt="Profile Pic" class="rounded-full w-20 h-20 mx-auto">                    
            @endif
            <p class="lg:mx-1 my-auto px-auto mx-auto py-auto text-white">
                    {{$user->name}} {{$user->lastname}}
            </p>
        </a>
        <div class="my-auto mx-auto lg:w-auto text-purple-500">    
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="my-auto">
                @csrf
                <button class="bg-white lg:w-auto lg:mx-1 my-2 lg:px-2 py-2 hover:bg-purple-200 rounded w-auto mx-1">
                    Log out!
                </button>
            </form> 
        </div>
    </div>
</div>