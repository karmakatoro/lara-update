<?php

namespace App\Http\Controllers;

use App\Models\NotificationsSettings;
use App\Http\Requests\StoreNotificationsSettingsRequest;
use App\Http\Requests\UpdateNotificationsSettingsRequest;

class NotificationsSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.settings.notifications');
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
    public function store(StoreNotificationsSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NotificationsSettings $notificationsSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotificationsSettings $notificationsSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotificationsSettingsRequest $request, NotificationsSettings $notificationsSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotificationsSettings $notificationsSettings)
    {
        //
    }
}
