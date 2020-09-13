@extends('layouts.app')
<title>Inicio de sesión</title>
@section('content')
<div class="container mx-auto bg-white text-purple-500 lg:w-1/2 my-20 flex flex-col text-center rounded">
    <img src="/images/logo.png" class="w-48 py-5 mx-auto">
    <h1 class="font-bold text-xl">
        <a href="/">My University Progress</a>
    </h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" class="border border-purple-300 my-3 py-1 px-1 rounded" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">
            @error('email')
            <br>
                <span class="border border-purple-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        <br>
        <input id="password" type="password" class="border border-purple-300 my-3 py-1 px-1 rounded" name="password" required autocomplete="current-password" placeholder="Contraseña">
                @error('password')
                <br>
                    <span class="border border-purple-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <br>
        {{-- <div class="form-group row">
            <div class="col-md-6 offset-md-4"> --}}
                {{-- <div class="form-check"> --}}
                    <input class="mb-4" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="mb-4 text-sm" for="remember">
                        Recordarme
{{--                     </label>
                </div>
            </div>
        </div> --}}
        <br>
        <button class="bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 rounded margin-white">Ingresar</button>
</form>
<br>
@if (Route::has('password.request'))
    <a class="hover:underline text-sm" href="{{ route('password.request') }}">
        ¿Olvidaste tu contraseña?
    </a>
@endif
<br>
|
<br>
@if (Route::has('register'))
    <a class="hover:underline mb-4 text-sm" href="{{ route('register') }}">
        Registrate
    </a>
@endif
</div>

@endsection
