<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ESTB\leave_staff;
use App\Http\Requests\Storeleave_staffRequest;
use App\Http\Requests\Updateleave_staffRequest;
use App\Http\Controllers\Controller;

class LeaveStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storeleave_staffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(leave_staff $leave_staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leave_staff $leave_staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateleave_staffRequest $request, leave_staff $leave_staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leave_staff $leave_staff)
    {
        //
    }
}
