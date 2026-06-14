<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        .auth-body{
            margin:0;
            min-height:100vh;
            background:#f4f8fb;
            font-family:Arial, sans-serif;
        }

        .auth-wrapper{
            width:100%;
            overflow-x:hidden;
        }

        .auth-card{
            width:90% !important;
            max-width:420px !important;
            margin:0 auto !important;
            box-sizing:border-box;
        }

        .auth-card input[type="email"],
        .auth-card input[type="password"],
        .auth-card input[type="text"],
        .auth-card select{
            width:100% !important;
            box-sizing:border-box;
        }

        .auth-card .flex,
        .auth-card .items-center,
        .auth-card .justify-end{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
        }

        .auth-card input[type="checkbox"]{
            width:16px !important;
            height:16px !important;
        }

        @media(max-width:576px){
            .auth-card{
                padding:25px 20px !important;
                border-radius:20px !important;
            }

            .auth-card button{
                width:100%;
                margin-top:15px;
            }

            .auth-card a{
                display:block;
                margin-bottom:10px;
            }
        }
    </style>
    </head>
        <body class="auth-body">

        <div class="auth-wrapper">

            <a href="/">
                <img src="{{ asset('images/logo.png') }}"
                    class="auth-logo"
                    alt="SmartClinic Logo">
            </a>

            <div class="auth-card">
                {{ $slot }}
            </div>

        </div>

    </body>
</html>
