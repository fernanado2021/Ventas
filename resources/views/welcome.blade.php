<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alitas_&_Hamburguesas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: black;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
           <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}"  style="color:white;">Home</a>
                @else
                <a href="{{ route('login') }}"  style="color:white;">Iniciar Sesion</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"  style="color:white;">Registrarse</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-8">
            <h3 style="color:white; margin-top: -40%;margin-left: 2%;font-family: acero y sangre; font-size: 50pt;">ALITAS & HAMBURGUESAS</h3>
            <img src="https://alitasyhamburguesasparrilla.com/cirafod/2020/10/Logo-Alitas-y-hamburguesas-parrilla-grande.png" style="width:20%; margin-left: 350px;">
            <p style="font-family:acero y sangre; margin-left: 4%; color: white; font-size: 15pt;">El mejor sabor en alitas y hamburguesa <b>Disfruta del placer de nuestros productos sason 100% Ecuatoriana</b></p>
        </div>
    </div>
</div>

</body>
</html>
