@extends('layouts.app')
@section('content')
<div class="container mx-auto bg-white text-purple-500 lg:w-1/2 my-20 flex flex-col text-center rounded">
    <img src="/images/logo.png" class="w-48 py-5 mx-auto">
    <h1 class="font-bold text-xl">
        <a href="/">My University Progress</a>
    </h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
            <div class="col-md-6">
                <input id="name" type="text" class="border border-purple-300 my-1 py-1 px-1 rounded" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
            <div class="col-md-6">
                <input id="email" type="email" class="border border-purple-300 my-1 py-1 px-1 rounded" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
            <div class="col-md-6">
                <input id="password" type="password" class="border border-purple-300 my-1 py-1 px-1 rounded" name="password" required autocomplete="new-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="border border-purple-300 my-1 py-1 px-1 rounded" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
    
                <button class="bg-green-400 hover:bg-green-600 text-white font-bold py-3 px-4 my-3 rounded margin-white">
                    ¡Registrarse!
                </button>
    </form>
</div>
@endsection
