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
            min-height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:30px 15px;
        }

        .auth-logo{
            width:85px;
            height:auto;
            margin-bottom:25px;
        }

        .auth-card{
            width:100%;
            max-width:430px;
            background:#fff;
            padding:35px;
            border-radius:18px;
            box-shadow:0 20px 50px rgba(0,0,0,.08);
        }

        .auth-card input[type="email"],
        .auth-card input[type="password"],
        .auth-card input[type="text"],
        .auth-card select{
            width:100%;
            padding:13px;
            border:1px solid #dbe3ea;
            border-radius:12px;
            margin-top:6px;
            margin-bottom:15px;
        }

        .auth-card input[type="checkbox"]{
            width:16px !important;
            height:16px !important;
            margin-right:8px;
        }

        .auth-card label{
            font-weight:600;
            color:#1f2937;
        }

        .auth-card button{
            background:#0d6efd;
            color:white;
            border:none;
            padding:12px 28px;
            border-radius:50px;
            font-weight:700;
        }

        .auth-card a{
            color:#0d6efd;
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
