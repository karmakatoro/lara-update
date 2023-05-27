@extends('pages.settings')

@section('title', 'Leave Type | '.env('APP_NAME'))

@section('subcontent')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Leave Type {{ $leaveType->name }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <form method="post" action="">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Leave Type <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name" value="{{ $leaveType->name }}">
                    @if($errors->has('name'))
                    <span class="text-danger mt-2">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Number of days <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="days" value="{{ $leaveType->days }}">
                    @if($errors->has('days'))
                    <span class="text-danger mt-2">{{ $errors->first('days') }}</span>
                    @endif
                </div>
                <div class="m-t-20 text-center">
                    <button type="submit" class="btn btn-primary submit-btn">Add Leave Type</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
