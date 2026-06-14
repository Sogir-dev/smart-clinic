<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartClinic Login</title>

    <style>
        *{
            box-sizing:border-box;
        }

        body{
            margin:0;
            min-height:100vh;
            background:#f4f8fb;
            font-family:Arial, sans-serif;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .auth-box{
            width:100%;
            max-width:420px;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 20px 50px rgba(0,0,0,.08);
        }

        .auth-logo{
            width:70px;
            display:block;
            margin:0 auto 25px;
        }

        label{
            font-weight:600;
            margin-bottom:6px;
            display:block;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"],
        select{
            width:100%;
            padding:12px;
            border:1px solid #dce3ea;
            border-radius:12px;
            margin-bottom:15px;
        }

        input[type="checkbox"]{
            width:16px;
            height:16px;
            margin-right:8px;
        }

        button{
            background:#0d6efd;
            color:white;
            border:none;
            padding:12px 25px;
            border-radius:50px;
            font-weight:700;
            cursor:pointer;
        }

        a{
            color:#0d6efd;
        }

        .flex{
            display:flex;
            align-items:center;
            gap:12px;
            flex-wrap:wrap;
        }

        .justify-end{
            justify-content:space-between;
        }

        @media(max-width:576px){
            body{
                align-items:center;
            }

            .auth-box{
                padding:25px 20px;
            }

            button{
                width:100%;
            }
        }
    </style>
</head>

<body>

    <div>
        <img src="{{ asset('images/logo.png') }}" class="auth-logo">

        <div class="auth-box">
            {{ $slot }}
        </div>
    </div>

</body>
</html>