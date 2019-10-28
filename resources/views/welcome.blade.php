<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>stareli</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/welcome.css')}}"> -->
    <style>
        body {
            background-color: #faebeb;
            /* background-image: url(img/dryflower.jpg); */
            background-size: cover;
        }

        .content{
            display: flex;
            justify-content: center;
            padding: 30vw 0;
            margin-top: 5vw
        }
        
        .logo {
            padding-top: 3vw;
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
            justify-content: center;
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
            /* margin-top: 50px; */
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
            padding: 5vw 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- トップページロゴ -->
        <div class="content">
            <div class="title m-b-md">
                <img src="img/stareli_logo2.png" class="logo">
            </div>
        </div>
        <div class="logo">
            <!-- <img class="logo1" src="img/stareli_logo2.png" alt=""> -->
            @if (Route::has('login'))
            <!--  -->
            <div class="submit-container">
                    @auth
                    <a href="{{ url('/home') }}" class="btn shop">ホーム</a> 
                    @else
                    <a href="{{ route('login') }}" class="btn login">ログイン</a>
                    <p>または</p>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn new">新規会員登録</a>
                    
                    @endif 
                    @endauth
                </div>
            <!--  -->
            @endif
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