@extends('layout.base')

@section('title', 'Login | '.env('APP_NAME'))

@section('content')
<div class="main-wrapper account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                <form action="{{ route('auth.connect') }}" class="form-signin" method="post" autocomplete="off">
                    @csrf
                    <div class="account-logo">
                        <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                    </div>
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" value="{{ old('email') }}" autocomplete="off" autofocus="" class="form-control">
                        @if($errors->has('email'))
                        <span class="text-danger mt-2">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" autocomplete="off">
                        @if($errors->has('password'))
                        <span class="text-danger mt-2">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group text-right">
                        <a href="{{ route('auth.forget') }}">Forgot your password?</a>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary account-btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
