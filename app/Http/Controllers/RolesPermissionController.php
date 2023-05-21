<?php

namespace App\Http\Controllers;

use App\Models\RolesPermission;
use App\Http\Requests\StoreRolesPermissionRequest;
use App\Http\Requests\UpdateRolesPermissionRequest;

class RolesPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRolesPermissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RolesPermission $rolesPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolesPermission $rolesPermission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRolesPermissionRequest $request, RolesPermission $rolesPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesPermission $rolesPermission)
    {
        //
    }
}
