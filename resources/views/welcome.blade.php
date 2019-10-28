<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>stareli</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">

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
                <img src="img/stareli_logo2.png" class="top-logo">
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