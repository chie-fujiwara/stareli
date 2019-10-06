<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>stareli</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* html,
        body {
            background-color: #fff;
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

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-top: 10rem;
        } */

        body {
            background-color: #faebeb;
            /* background-image: url(img/dryflower.jpg); */
            background-size: cover;
        }

        .logo {
            height: 60px;
            width: auto;
        }


        .auth-main {
            /* display: table-cell; */
            text-align: center;
            /*
height:697px; */
            vertical-align: middle;
            padding-top: 70px;

        }

        .auth-container {
            text-align: center;
            padding: 30px 20px;

        }

        .submit-container {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
        }

        .btn {
            width: 280px;
            padding: 15px;
            color: gray;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;

        }

        .new {
            background-color: #fabbbb;
            margin-top: 50px;
        }

        .login {
            background-color: whitesmoke;
            margin-top: 2px;
        }

        .shop {
            background-color: #8a86b3;
            margin-top: 10px;
            color: white;
        }

        .line {
            border-bottom: 1.8px dashed grey;
            padding-bottom: 15px;
            width: 280px;
        }

        p {
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>

    <div class="content">
        <div class="title m-b-md">
            <img src="img/stareli_logo2.png" width="40%" height="40%" alt="">
        </div>

    </div>
</body>

</html>