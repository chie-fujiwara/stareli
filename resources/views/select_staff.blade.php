@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- スタッフ１    -->
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    Here is select staff page.
                    <button type="submit" class="btn btn-primary">
                    </button>
                </div>
            </div>
            <!-- スタッフ２ -->
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif -->

                    You are logged in!
                    Here is select staff page.
                    <button type="submit" class="btn btn-primary">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection