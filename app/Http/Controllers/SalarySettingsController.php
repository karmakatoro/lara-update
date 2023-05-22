<?php

namespace App\Http\Controllers;

use App\Models\SalarySettings;
use App\Http\Requests\StoreSalarySettingsRequest;
use App\Http\Requests\UpdateSalarySettingsRequest;

class SalarySettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.settings.salary');
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
    public function store(StoreSalarySettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SalarySettings $salarySettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalarySettings $salarySettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalarySettingsRequest $request, SalarySettings $salarySettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalarySettings $salarySettings)
    {
        //
    }
}
