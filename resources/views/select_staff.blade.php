@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- スタッフ１    -->
            <div class="card">
                <div class="card-header">スタッフA</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。

                    <br>
                    <form action="{{ url('wshift/')}}" method="GET">
                        <button type="submit" class="btn btn-primary">シフトを確認する
                        </button>
                    </form>
                </div>
            </div>
            <!-- スタッフ２ -->
            <div class="card">
                <div class="card-header">スタッフB</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif -->
                    ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。ここに200文字程度の紹介文が入ります。

                    <br>
                    <button type="submit" class="btn btn-primary">シフトを確認する
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection