<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ntcpayscale;
use App\Http\Requests\StorentcpayscaleRequest;
use App\Http\Requests\UpdatentcpayscaleRequest;
use Illuminate\Support\Carbon;
use App\Models\designation;
use  Illuminate\Database\Query\Builder;
use Illuminate\Pagination\Paginator;
use App\Models\designation_ntcpayscale;
use App\Http\Controllers\Controller;

class NtcpayscaleController extends Controller
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
    public function store(StorentcpayscaleRequest $request)
    {
        $ntcpayscale=new ntcpayscale();
        $ntcpayscale->basepay=$request->basepay;
        $ntcpayscale->allowance=$request->allowance;
        $ntcpayscale->year=$request->year;
        $ntcpayscale->wef=$request->wef;
        $ntcpayscale->gcr=$request->gcr;
        $ntcpayscale->created_at=Carbon::Now();
        $ntcpayscale->status='active';
        $result = $ntcpayscale->save();
        $design=$request->ntcdesign;
        //dd($non_teaching_payscale->designations()->attach($design[0]));
        
        foreach( $design as $d){
            $designation=designation::find($d);
            $ntcpayscale->designations()->attach($designation,['start_date'=>$request->wef,'gcr'=>$request->gcr]);
        }
        
            
        
        
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/non_teaching')->with('status',$status);

    }

    /**
     * Display the specified resource.
     */
    public function show(ntcpayscale $ntcpayscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ntcpayscale $ntcpayscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatentcpayscaleRequest $request, ntcpayscale $ntcpayscale)
    {
        //
        $ntcpayscale->basepay=$request->basepay;
        $ntcpayscale->allowance=$request->allowance;
        $ntcpayscale->wef=$request->wef; 
        $ntcpayscale->year=$request->year;
        $design=$request->ntdesign;
        //case 1: exists in table and in ui checked do nothing
        //case 2: exists in table and in ui not checked update to closed_date
        //case 3: does not exists in table and checked in ui insert in pivot table
        //setting flag=0 based on comparision with database and UI change flag value to 1,2 or 3
        //to execute the appropriate code as listed in the above 3 cases.

        foreach ($ntcpayscale->designations as $des) {
            $flag=0;
            //to Join the pivot table with master table( PT : designation_ntpayscale MT: designations and ntpayscales)
            $ntcpayscale=$ntcpayscale->load('designations');
            foreach( $design as $d)
            {
                //dd($des->id. $d);
                if($des->id==$d){
                    $flag=2;
                   
                } 
            
            }
        
            if($flag==0){
                $ntcpayscale->designations()->updateExistingPivot($des->id,['end_date'=>Carbon::Now(),'status'=>'inactive']);
            }
        }
        foreach( $design as $d)
        {
            $flag=0;
            $designation=designation::find($d);
            foreach($ntcpayscale->designations as $des){
                if($des->id==$d){
                   $flag=1; //database table contains the checked designation.
                   //check if this designation is inactive and make it inactive
                    if($des->pivot->status=='inactive'){
                        $ntcpayscale->designations()->attach($designation,['start_date'=>Carbon::Now()]);
                    }
                }
            }
            if($flag==0){
                    $flag=3; //database table does not contain the checked designation so insert the designation in the cross table
                    $ntcpayscale->designations()->attach($designation,['start_date'=>Carbon::Now()]);
                }
        }
        
        
        $result = $ntcpayscale->update();
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
    public function destroy(ntcpayscale $ntcpayscale)
    {
        //
        $ntcpayscale->status='inactive';
        $ntcpayscale->closedon=Carbon::Now();
       $result= $ntcpayscale->update();
       //to join pivot table with master table.
       $ntcpayscale=$ntcpayscale->load('designations');
       foreach($ntcpayscale->designations as $des){
            $result = $ntcpayscale->designations()->updateExistingPivot($des->id,['end_date'=>Carbon::Now(),'status'=>'inactive']);
       }
        //dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/non_teaching')->with('status', $status);
    }
}
