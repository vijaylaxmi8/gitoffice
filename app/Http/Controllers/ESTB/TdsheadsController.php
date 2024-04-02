<?php

namespace App\Http\Controllers\ESTB;

use App\Models\tdsheads;
use App\Http\Requests\StoretdsheadsRequest;
use App\Http\Requests\UpdatetdsheadsRequest;
use App\Http\Controllers\Controller;

class TdsheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('ESTB.construction');
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
    public function store(StoretdsheadsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tdsheads $tdsheads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tdsheads $tdsheads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetdsheadsRequest $request, tdsheads $tdsheads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tdsheads $tdsheads)
    {
        //
    }
}
