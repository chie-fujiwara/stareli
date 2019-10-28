@extends('layouts.app')

@section('additional_head')
<style>
        body {
            background-color: #faebeb;
            /* background-image: url(img/dryflower.jpg); */
            background-size: cover;
        }

        .auth-main {
            text-align: center;
            vertical-align: middle;
            padding-top: 10px;

        }

        .auth-container {
            text-align: center;
            padding: 20px 30px;

        }

        .login {
            margin-bottom: 50px;
        }


        h2 {
            font-weight: normal;
            color: gray;
            font-size: 16px;

        }

        .submit-container {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
        }

        #name{
            width: 280px;
            padding: 15px;
            color: gray;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;
            border: none;
            -webkit-appearance: none;
        }

        #user-email {
            width: 280px;
            padding: 15px;
            color: gray;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;
            border: none;
            -webkit-appearance: none;
        }

        #user-password {
            width: 280px;
            padding: 15px;
            color: gray;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;
            border: none;
            -webkit-appearance: none;
        }

        #password-confirm{
            width: 280px;
            padding: 15px;
            color: gray;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;
            border: none;
            -webkit-appearance: none;
        }


        #btn_login {
            background-color: #8a86b3;
            margin-top: 150px;
            color: white;
            width: 280px;
            padding: 15px;
            display: inline-block;
            opacity: 0.8;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 15px;
        }

        p {
            color: gray;
            font-size: 14px;
        }
</style>
@endsection('addtional_head')

@section('content')
<div class="auth-main">
    <div class="auth-container">
        <div class="login">
            <h2>新規登録</h2>
        </div>
        <div class="form">
            <form method="POST" class="submit-container" action="{{ route('register') }}">
                @csrf
                <!-- 氏名欄 -->
                <label for="name" class="col-md-4 col-form-label text-md-right">氏名</label>
                <input placeholder="氏名" type="text" class="@error('name') is-invalid @enderror" id="name"
                    value=" {{ old('email') }}" name="name" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- メールアドレス欄 -->
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                <input placeholder="メールアドレス" type="email" class="@error('email') is-invalid @enderror" id="user-email"
                    value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- パスワード欄 -->
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
                <input placeholder="パスワード" type="password" id="user-password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- パスワード確認 -->
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</label>
                <input placeholder="パスワード確認" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <!-- <input type="submit" value="ログイン" id="btn_login"> -->
                <button type="submit" id="btn_login">
                    {{ __('Register') }}
                </button>
                <!-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif -->
            </form>

        </div>
    </div>
</div>



<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection