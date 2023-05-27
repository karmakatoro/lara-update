@extends('pages.settings')

@section('title', 'Leave Type - Add | '.env('APP_NAME'))

@section('subcontent')
<div class="content">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Add Leave Type</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            @if(session()->has('success'))

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
            </div>
            @endif
            <form method="POST" action="{{ route('leave-type-settings.store') }}">
                @csrf
                <div class="form-group">
                    <label>Leave Type <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="name">
                    @if($errors->has('name'))
                    <span class="text-danger mt-2">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Number of days <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="days">
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
