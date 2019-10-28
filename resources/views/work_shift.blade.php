@extends('layouts.app')

@section('additional_head')
<link href="{{ asset('css/select_staff.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <!-- {!! $staffs !!} -->
    <!-- <h3 class="justify-content-center">ASAMIさんのシフト</h3> -->
    <h3 class="justify-content-center">{!! $staffs->name !!}さんのシフト</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="title m-b-md">
                <img src="img/アセット 6.png" width="100%" height="40%" alt="">
            </div> -->

            <h2>
                <form method="POST" action="/wshift?year={!! $tag[1][2] !!}&month={!! $tag[1][3] !!}">
                {{ csrf_field() }}
                    <input type="hidden" name="staff_id" value="{{$staffs -> id}}">
                    <input type="submit" value="&lt;前月" class="btn btn-primary">
                </form>
                <!-- <a class="btn btn-primary" href="/wshift?year={!! $tag[1][2] !!}&month={!! $tag[1][3] !!}"
                    role="button">&lt;前月</a> -->
                {!! $tag[1][0] !!}/{!! $tag[1][1] !!}
                <form method="POST" action="/wshift?year={!! $tag[1][4] !!}&month={!! $tag[1][5] !!}">
                {{ csrf_field() }}
                    <input type="hidden" name="staff_id" value="{{$staffs -> id}}">
                    <input type="submit" value="翌月&gt;" class="btn btn-primary">
                </form>
                <!-- <a class="btn btn-primary" href="/wshift?year={!! $tag[1][4] !!}&month={!! $tag[1][5] !!}"
                    role="button">翌月&gt;</a> -->
            </h2>
            <table class="table table-bordered" style="table-layout:fixed;">
                <tr>
                    <th scope="col">Sun</th>
                    <th scope="col">Mon</th>
                    <th scope="col">Tue</th>
                    <th scope="col">Wed</th>
                    <th scope="col">Thu</th>
                    <th scope="col">Fri</th>
                    <th scope="col">Sat</th>
                </tr>
                {!! $tag[0] !!}

                <!-- <h3>スタッフ予約フォーム</h3> -->
                <form action="{{ url('/reserve') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <!-- 来店日時 -->
                        <div class="col-sm-6">
                            <label for="rv_datetime" class="col-sm-10 control-label">予約日時</label>
                            <input type="datetime-local" value = "yyyy-mm-ddThh:mm" name="rv_datetime" id="rv_datetime" class="form-control">
                        </div>
                        <!-- comment -->
                        <div class="col-sm-6 col-md-20">
                            <label for="rv_comment" class="col-sm-5 control-label">コメント</label>
                            <input type="text" name="rv_comment" id="rv_comment" class="form-control col-md-20">
                        </div>
                    </div>
                    <!-- 予約確定ボタン -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-success">予約する</button>
                        </div>
                    </div>
                    <input type="hidden" name="staff_id" value="{{$staffs -> id}}">
                </form>
        </div>
    </div>
</div>
@endsection