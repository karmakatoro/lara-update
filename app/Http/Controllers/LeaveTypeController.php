<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use App\Http\Requests\StoreLeaveTypeRequest;
use App\Http\Requests\UpdateLeaveTypeRequest;
use Illuminate\Support\Str;

class LeaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.settings.leave-type');
    }

    public function fetchAll()
    {
        $leaveTypes = LeaveType::all();
        $output = '';
        if ($leaveTypes->count() > 0) {
            $output .= '
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
                <tbody>';

            foreach ($leaveTypes as $leaveType) {
                $output .= '<tr>
                        <td>' . $leaveType->id  . '
                        </td>
                        <td>' . $leaveType->name . '</td>
                        <td>' . $leaveType->days . '</td>
                        <td>
                            <div class="dropdown action-label">
                                <a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                    ' . Str::ucfirst($leaveType->status) . '
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
                                    <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>';
            }
            $output .= '</tbody>
                </table>';

            echo $output;
        } else {

            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.settings.forms-leave-type');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeaveTypeRequest $request)
    {
        LeaveType::create([
            'name' => $request->name,
            'days' => $request->days,
            'status' => 'active'
        ]);
        // return redirect()->route('leave-type-settings.create')->with('success', 'Leave type created');
        return response()->json(['success' => 'Post created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(LeaveType $leaveType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeaveType $leaveType)
    {
        return view('pages.settings.edit-leave-type', compact('leaveType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeaveTypeRequest $request, LeaveType $leaveType)
    {
        $leaveType->update($request->all());

        return redirect()->route('leave-type-settings.edit')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeaveType $leaveType)
    {
        //
    }
}
