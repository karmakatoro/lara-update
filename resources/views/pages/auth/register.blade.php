@extends('layout.base')

@section('content')
<div class="main-wrapper  account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                <form action="" class="form-signin">
                    <div class="account-logo">
                        <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <div class="form-group checkbox">
                        <label>
                            <input name="rules" type="checkbox"> I have read and agree the Terms & Conditions
                        </label>
                    </div>
                    <div class="form-group text-center">
                        <button name="submit" class="btn btn-primary account-btn" type="submit">Signup</button>
                    </div>
                    <div class="text-center login-link">
                        Already have an account? <a href="login.html">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
