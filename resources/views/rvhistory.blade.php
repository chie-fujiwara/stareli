@extends('layouts.app')

@section('additional_head')
<link href="{{ asset('css/select_staff.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>マイページ</h3>
            <p>・来店予約一覧</p>

            <form action="{{ url('/home')}}" method="GET">
                <button type="submit" class="btn btn-primary">
                    スタッフ一覧に戻る
                </button>
            </form>

            <table class="table table-striped task-table">
                        <!-- テーブルヘッダ -->
                        <!-- <thead>
                            <th>タスク</th>
                            <th>&nbsp;</th>
                        </thead> -->
                        <!-- テーブル本体 -->
                        <tbody>
                            @foreach ($myrvs as $myrv)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $myrv->staff_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $myrv->rv_datetime }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $myrv->rv_comment }}</div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection