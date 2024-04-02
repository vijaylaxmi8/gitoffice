<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Controllers\Controller;
use App\Models\holidayrh;
use App\Http\Requests\StoreholidayrhRequest;
use App\Http\Requests\UpdateholidayrhRequest;

class HolidayrhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $filter = '';
        $holidayrh=holidayrh::orderBy('start')->get();
        return view('ESTB.leaves.holiday_rhlist.index',compact('holidayrh','filter'));
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
    public function store(StoreholidayrhRequest $request)
    {
        //dd($request);
        $holidayrh=new holidayrh();
        $holidayrh->year=$request->year;
        $holidayrh->title=$request->title;
        $holidayrh->start=$request->start;
        $holidayrh->day=$request->day;
        $holidayrh->type=$request->type;
        $holidayrhId = $holidayrh->save();
        if($holidayrhId){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/leaves/holiday_rhlist')->with('status', $status);
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(holidayrh $holidayrh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(holidayrh $holidayrh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateholidayrhRequest $request, holidayrh $holidayrh)
    {
        //
        $holidayrh->year=$request->year;
        $holidayrh->title=$request->title;
        $holidayrh->start=$request->start; 
        $holidayrh->day=$request->day;
        $holidayrh->type=$request->type;
        $result = $holidayrh->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/leaves/holiday_rhlist')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(holidayrh $holidayrh)
    {
        //
        $result =$holidayrh->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/leaves/holiday_rhlist')->with('status', $status);
    }
}
