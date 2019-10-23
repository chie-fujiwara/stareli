@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet"> -->

    <link href="{{ asset('css/select_staff.css')}}" rel="stylesheet">

</head>

<body>
    <div class="list-container">
        <div class="shop-card" href="">
            <!-- <p>{!! $staffs !!}</p> -->
            @foreach($staffs as $staff)
            <div class="shop-card-head">
                <div class="account-head">
                    <img src="img/staff_1.png" alt="" class="account-thumb">
                </div>
                <div class="account-head-detail">
                    <p>名前 : {{ $staff->name}}<p>
                            <p>店舗名 :<br>
                                BEAUTY&YOUTH<br>
                                天神ソラリアプラザ店
                            </p>
                </div>
            </div>
            <div class="shop-card-body">
                <p class="shop-card-text">カジュアルな中でも女性らいしいスタイリングが得意です。<br>
                    温泉が好きでよく旅行に行きます！

                </p>
            </div>
            <form action="{{ url('wshift/')}}" method="GET">
                <input type="submit" value="シフトを確認する" class="btn shift">
            </form>
            @endforeach
        </div>
    </div>

</body>




<!-- <div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <h3>マイページ</h3>
            <p>スタッフ一覧</p> -->
<!-- スタッフ１    -->
<!-- <div class="card">

                <div class="card-header">ASAMI</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <img src="img/staff_img.png" alt="">
                    </div>
                    ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。

                    <br>
                    <form action="{{ url('wshift/')}}" method="GET">
                        <button type="submit" class="btn btn-primary">シフトを確認する
                        </button>
                    </form>
                </div>
            </div> -->
<!-- スタッフ２ -->
<!-- <div class="card">
                <div class="card-header">SAYAKA</div>

                <div class="card-body"> -->
<!-- //////// -->
<!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif -->
<!-- //////// -->
<!-- <div>
                        <img src="img/staff_1.png" alt="">
                    </div>
                    ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。

                    <br>
                    <button type="submit" class="btn btn-primary">シフトを確認する
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->