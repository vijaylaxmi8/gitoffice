<?php

namespace App\Http\Controllers\ESTB;

use App\Models\payscale;
use App\Http\Requests\StorepayscaleRequest;
use App\Http\Requests\UpdatepayscaleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class PayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payscale=DB::table('payscales')->orderBy('payscale_title')->paginate(15);
        return view('ESTB.payscales.index',compact('payscale'));
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
    public function store(StorepayscaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(payscale $payscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payscale $payscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepayscaleRequest $request, payscale $payscale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payscale $payscale)
    {
        //
    }
}
