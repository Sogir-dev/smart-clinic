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
    svg{
        max-width:90px !important;
        height:auto !important;
    }

    body{
        font-family: Arial, sans-serif;
        background:#f4f8fb;
    }

    form{
        max-width:420px;
        margin:30px auto;
        background:#fff;
        padding:30px;
        border-radius:16px;
        box-shadow:0 15px 40px rgba(0,0,0,.08);
    }

    label{
        font-weight:600;
        display:block;
        margin-top:12px;
    }

    input[type="email"],
    input[type="password"],
    input[type="text"],
    select{
        width:100%;
        padding:12px;
        border:1px solid #ddd;
        border-radius:10px;
        margin-top:6px;
    }

    input[type="checkbox"]{
        width:18px !important;
        height:18px !important;
        padding:0 !important;
        margin:0 8px 0 0 !important;
    }

    button{
        margin-top:18px;
        padding:12px 25px;
        border:none;
        border-radius:30px;
        background:#0d6efd;
        color:#fff;
        font-weight:700;
    }
</style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}"
                        alt="SmartClinic Logo"
                        style="width:90px; height:auto; margin-bottom:20px;">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
