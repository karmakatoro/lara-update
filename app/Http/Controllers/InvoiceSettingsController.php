<?php

namespace App\Http\Controllers;

use App\Models\InvoiceSettings;
use App\Http\Requests\StoreInvoiceSettingsRequest;
use App\Http\Requests\UpdateInvoiceSettingsRequest;

class InvoiceSettingsController extends Controller
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
    public function store(StoreInvoiceSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceSettings $invoiceSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceSettings $invoiceSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceSettingsRequest $request, InvoiceSettings $invoiceSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceSettings $invoiceSettings)
    {
        //
    }
}
