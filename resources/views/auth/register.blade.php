@extends('layouts.master')

@section('content')
{{-- Anterior register --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid fixed">
    <div class="row full-height">
        <div class="d-flex col-md-4 align-items-center justify-content-center">
            <div class="row-md-12 full-height" style="width: 25vw">
                <form class="col" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="d-flex row mb-4 mt-3 " style="height: 40px; width: 120px;"><img height="40vh" width="10vw" src="{{ asset('assets/logo.png') }}" alt="logo"></div>
                    <div class="row mb-3 justify-content-center align-items-center"><h5>Registrarme</h5></div>
                    <div class="row mb-3">
    
                        <div class="col-md-12 mb-3">
                            <input id="email" type="email" placeholder="Ingresar correo" class="form-control @error('email') is-invalid @enderror login-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input id="username" type="text" placeholder="Ingresar nombre de usuario" class="form-control @error('username') is-invalid @enderror login-input" name="username" required autocomplete="username">
    
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                        
                    </div>
    
                    <div class="row mb-3">    
                        <div class="col">
                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="current-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-5">    
                        <div class="col">
                            <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control login-input" name="password_confirmation" required autocomplete="new-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-12 offset-md-2 mb-3">
                            <button type="submit" class="btn btn-primary" style="color: white; width: 14vw; font-weight: bold;">
                                {{ __('Registrarme') }}
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-2">
                            <a class="btn btn-outline-primary register-btn" style="color: @primary; width: 14vw; font-weight: bold;" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a> 
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex col-md-8 align-items-center" style="display: grid;">
            <img src="{{ asset('assets/login-background.jpg')}}" alt="background" class="full-height login-bg fixed">
            <div class="overlay"></div>
            <h1 class="login-tittle">Desarrollo Integral de la Familia</h1>
        </div>
    </div>

</div>
@endsection