@extends('layouts.app')

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
        </div>
    </div>
</div>
@endsection