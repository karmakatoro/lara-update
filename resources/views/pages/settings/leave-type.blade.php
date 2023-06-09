@extends('pages.settings')

@section('title', 'Leave Type | '.env('APP_NAME'))

@section('subcontent')
<div class="content">
    <div class="row">
        <div class="col-sm-8 col-5">
            <h4 class="page-title">Leave Type</h4>
        </div>
        <div class="col-sm-4 col-7 text-right m-b-30">
            <a href="#"data-toggle="modal" data-target="#add_leave-type" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Leave Type</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive" id="show_all">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
            </div>
        </div>
    </div>
</div>
<div class="modal fade none-border" id="add_leave-type">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title">Add Leave Type</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="error alert alert-info alert-dismissible fade show" role="alert" style="display: none">
                            <ul></ul>
                        </div>
                        <form id="leave-form" data-url="{{ route('leave-type-settings.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Leave Type <span class="text-danger">*</span></label>
                                <input id="nameID" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Number of days <span class="text-danger">*</span></label>
                                <input id="daysID" class="form-control" type="text" name="days">
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add Leave Type</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary submit-btn save-event">Add</button>
                <button type="button" class="btn btn-danger btn-lg delete-event" data-dismiss="modal">Delete</button>
            </div> --}}
        </div>
    </div>
</div>
<script>
    $(document).ready(function ($) {
    // Show all leave types
    fetchAllEmployees();

    function fetchAllEmployees() {
        var url = "{{ route('leave-type.fetch')}}";
        $.ajax({
            url: url,
            method: 'get',
            success: function (response) {
                $("#show_all").html(response);
                $("table").DataTable({
                    order: [0, 'desc']
                });
            }
        });
    }
});
</script>
@endsection
