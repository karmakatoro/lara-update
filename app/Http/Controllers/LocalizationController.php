<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Http\Requests\StoreLocalizationRequest;
use App\Http\Requests\UpdateLocalizationRequest;

class LocalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.settings.localization');
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
    public function store(StoreLocalizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Localization $localization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Localization $localization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocalizationRequest $request, Localization $localization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Localization $localization)
    {
        //
    }
}
