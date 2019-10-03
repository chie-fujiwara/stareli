@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>スタッフ予約フォーム</h3>
            <!-- タスク登録フォーム -->
            <form action="{{ url('/reserve') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
            <!-- タスク名 -->
            <div class="form-group">
                <!-- <div class="col-sm-6">
                    <label for="task" class="col-sm-3 control-label">Task</label>
                    <input type="text" name="task" id="task" class="form-control">
                </div> -->
                <!-- deadline -->
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
            <!-- タスク登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection