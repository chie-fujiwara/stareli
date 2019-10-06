@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="justify-content-center">シフト確認</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title m-b-md">
            <img src="img/11111.png" width="100%" height="40%" alt="">
        </div>
            <!-- <h3>スタッフ予約フォーム</h3> -->
            <form action="{{ url('/reserve') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <!-- 来店日時 -->
                    <div class="col-sm-6">
                        <label for="rv_datetime" class="col-sm-10 control-label">予約日時</label>
                        <input type="date" name="rv_datetime" id="rv_datetime" class="form-control">
                    </div>
                    <!-- comment -->
                    <div class="col-sm-6 col-md-20">
                        <label for="rv_comment" class="col-sm-3 control-label">Comment</label>
                        <input type="text" name="rv_comment" id="rv_comment" class="form-control col-md-20">
                    </div>
                </div>
                <!-- 予約確定ボタン -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">予約する</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection