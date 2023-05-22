@extends('pages.settings')

@section('title', 'Change Password | '.env('APP_NAME'))

@section('subcontent')
<div class="content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4 class="page-title">Change Password</h4>
            <form method="POST" action="{{ route('change-password') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Old password</label>
                            <input type="password" class="form-control" name="old">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" class="form-control" name="new">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="confirm">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center m-t-20">
                        <button type="sumbit" class="btn btn-primary submit-btn">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
