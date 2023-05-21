<?php

namespace App\Http\Controllers;

use App\Models\EmailSettings;
use App\Http\Requests\StoreEmailSettingsRequest;
use App\Http\Requests\UpdateEmailSettingsRequest;

class EmailSettingsController extends Controller
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
    public function store(StoreEmailSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailSettings $emailSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmailSettings $emailSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailSettingsRequest $request, EmailSettings $emailSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailSettings $emailSettings)
    {
        //
    }
}
