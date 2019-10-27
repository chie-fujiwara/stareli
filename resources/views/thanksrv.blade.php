@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3> Thanks for reservation!!</h3>

            <form action="{{ url('/home')}}" method="GET">
                <button type="submit" class="btn btn-primary">
                    マイページに戻る
                </button>
            </form>
        </div>
    </div>
</div> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>stareli</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    <link href="{{ asset('css/thanks.css')}}" rel="stylesheet">

</head>


<body>
    <div class="auth-main">
        <div class="auth-container">

            <div class="form">
                <h1>
                    <a href="">
                        <img src="img/stareli_logo2.png" class="logo">
                    </a>
                </h1>
            </div>

            <div class="sub">
                <p>STA/RELI スタレリ は、あなたの<br>好きなスタッフを予約できるサービスです</p>
            </div>
            <div class="comp">
                <p>予約完了しました<br>
                    当日店舗でお待ちしております
                </p>
            </div>

            <form class="submit-container" action="{{ url('/home')}}" method="GET">
                <input type="submit" value="マイページへ戻る" class="btn mypage">
            </form>


        </div>
    </div>
</body>

@endsection