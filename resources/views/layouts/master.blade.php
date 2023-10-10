<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

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
            right: ;: 0;
            width: 70%;
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
    @yield('content')
</body>
</html>