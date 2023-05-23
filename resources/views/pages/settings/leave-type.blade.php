@extends('pages.settings')

@section('title', 'Leave Type | '.env('APP_NAME'))

@section('subcontent')
<div class="content">
    <div class="row">
        <div class="col-sm-8 col-5">
            <h4 class="page-title">Leave Type</h4>
        </div>
        <div class="col-sm-4 col-7 text-right m-b-30">
            <a href="{{ route('leave-type-settings.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Leave Type</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Leave Type</th>
                            <th>Leave Days</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leaveTypes as $leaveType )
                        <tr>
                            <td>
                                {{ $leaveType->id }}
                            </td>
                            <td>{{ $leaveType->name }}</td>
                            <td>{{ $leaveType->days }}</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                        {{ Str::ucfirst($leaveType->status)  }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Active</a>
                                        <a href="#" class="dropdown-item">Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('leave-type-settings.edit', $leaveType) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_leavetype"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
