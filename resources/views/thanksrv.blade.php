@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection