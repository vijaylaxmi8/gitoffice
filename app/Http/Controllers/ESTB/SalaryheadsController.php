<?php

namespace App\Http\Controllers\ESTB;

use App\Models\salaryheads;
use App\Http\Requests\StoresalaryheadsRequest;
use App\Http\Requests\UpdatesalaryheadsRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalaryheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $salary_heads = DB::table('salaryheads')->orderBy('salary_head')->paginate(15);
        return view('ESTB.salaryheads.index',compact('salary_heads'));
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
    public function store(StoresalaryheadsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(salaryheads $salaryheads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(salaryheads $salaryheads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesalaryheadsRequest $request, salaryheads $salaryheads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salaryheads $salaryheads)
    {
        //
    }
}
