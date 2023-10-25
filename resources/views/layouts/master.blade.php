<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="full-height">
    <style>
        /* Reglas de CSS personalizadas para altura del 100% */
        .full-height {
            height: 100vh; /* 100% de la altura de la ventana */
        }
        .overlay{
            position: absolute;
            top: 0;
            right: 0;
            width: 98.5%;
            height: 100%;
            background-color: rgba(246, 31,96, 0.46);
            z-index: 1;
        }
        .fixed{
            position: fixed;
        }
        .login-tittle{
            font-size: 4rem;
            font-weight: bold;
            position: fixed;
            width: 35%;
            z-index: 5;
            color: white;
            margin-left: 15%;
        }
        .login-input{
            height: 8vh;
            font-size: 1rem;
        }
        h5{
            color: #F61F60;
            font-weight: bold;
            align-self: center;
            display: flex;
            justify-content: center;
        }
        .register-btn:hover{
            background-color: #F61F60;
            color: white;
        }
    </style>
    <script src="{{ asset('js/codigo.js')}}"></script>
    @yield('content')
</body>
</html>
