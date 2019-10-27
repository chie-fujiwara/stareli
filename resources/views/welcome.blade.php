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
        html,
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

        .logo{
            height: 4vw;
        }

        .top-right {
            position: absolute;
            right: 2vw;
            top: 1.2vw;
            /* display: flex;
            align-items: center; */
        }

        .content {
            height: 100vh;
            text-align: center;
            background-image: url(img/backimg.jpg);
            background-size: 100% auto;
            background-position: 50% 25%;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: whitesmoke;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            /* padding: 0 25px; */
            padding: 0 1.6vw;
            /* font-size: 13px; */
            font-size: 1vw;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            padding-top: 10rem;
            /* margin-left: 25rem; */
            /* background-image: url(img/top_back.jpg); */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <!-- <img class="logo1" src="img/stareli_logo2.png" alt=""> -->
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
        <!-- トップページロゴ -->
        <div class="content">
            <div class="title m-b-md">
                <img src="img/stareli_logo2.png" width="40%" height="40%" alt="">
            </div>
        </div>    
    </div>


    <!-- <div class="flex-center position-ref full-height"> -->
    <!-- @if (Route::has('login'))
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
        @endif -->

    
    <!-- </div> -->
</body>

<!-- 
<body>
    <div class="container">
        <div class="logo">
            <img class="logo1" src="img/stareli_logo.png" alt="">
        </div>
    </div>

    <div class="container">
        <div class="btn-wrapper">
            <a href="" class="btn new">新規アカウント登録</a>
            <p>または</p>
            <a href="" class="btn login">ログイン</a>
            <p class="line"></p>
            <a href="" class="btn shop">登録店舗を探す</a>
        </div>
    </div>



</body> -->



</html>