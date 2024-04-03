<?php

namespace App\Http\Controllers\ESTB;

use App\Models\renumerationheads;
use App\Http\Requests\StorerenumerationheadsRequest;
use App\Http\Requests\UpdaterenumerationheadsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class RenumerationheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $renumerations=DB::table('renumerationheads')->orderBy('activity')->paginate(15);
        return view('ESTB.renumerations.index',compact('renumerations'));
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
    public function store(StorerenumerationheadsRequest $request)
    {
        //
        $renumerations=new department();
        $renumerations->activity=$request->activity;
        $renumerations->level=$request->level;
        $renumerations->created_at = Carbon::now();
        $renumerations->status='active';
        $result = $renumerations->save();


        //dd($insertedId);
        if($result){
            $status = 1;
            return redirect('/ESTB/renumerations')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/renumerations')->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(renumerationheads $renumerationheads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(renumerationheads $renumerationheads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterenumerationheadsRequest $request, renumerationheads $renumerationheads)
    {
        //
        $renumerations->dept_namactivitye=$request->edit_activity;
        $renumerations->level=$request->edit_level;
       
        if($request->status=='active'){
            $renumerations->status='active';
        }  
        $result = $renumerations->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/renumerations')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(renumerationheads $renumerationheads)
    {
        //
    }
}
