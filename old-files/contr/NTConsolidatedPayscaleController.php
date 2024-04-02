<?php

namespace App\Http\Controllers;

use App\Models\NTConsolidated_payscale;
use App\Http\Requests\StoreNTConsolidated_payscaleRequest;
use App\Http\Requests\UpdateNTConsolidated_payscaleRequest;

class NTConsolidatedPayscaleController extends Controller
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
    public function store(StoreNTConsolidated_payscaleRequest $request)
    {
        $NTConsolidated_payscale=new ntconsolidated_payscale();
        $NTConsolidated_payscale->basepay=$request->basepay;
        $NTConsolidated_payscale->allowance=$request->allowance;
        $NTConsolidated_payscale->wef=$request->wef;
        $NTConsolidated_payscale->year=$request->year;
        $NTConsolidated_payscale->status='active';
        $result=$NTConsolidated_payscale->save();
        if($result==true){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/payscales/non_teaching')->with('status',$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(NTConsolidated_payscale $nTConsolidated_payscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NTConsolidated_payscale $nTConsolidated_payscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNTConsolidated_payscaleRequest $request, NTConsolidated_payscale $nTConsolidated_payscale)
    {
        //
        $nTConsolidated_payscale->basepay=$request->basepay;
        $nTConsolidated_payscale->allowance=$request->allowance;
        $nTConsolidated_payscale->year=$request->year;
        $nTConsolidated_payscale->wef=$request->wef; 
        if($request->status=='active'){
           $nTConsolidated_payscale->status='active'; 
        }
        $nTConsolidated_payscale->closedon=$request->closedon;
        $result = $nTConsolidated_payscale->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        //dd($result);
        return redirect('/ESTB/payscales/non_teaching')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NTConsolidated_payscale $nTConsolidated_payscale)
    {
        //
       // dd($nTConsolidated_payscale);
        $nTConsolidated_payscale->status='inactive';
       $result= $nTConsolidated_payscale->update();
       //dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/non_teaching')->with('status', $status);
    }
}
