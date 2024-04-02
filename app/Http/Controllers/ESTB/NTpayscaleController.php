<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Http\Requests\StorentpayscaleRequest;
use App\Http\Requests\UpdatentpayscaleRequest;
use App\Http\Controllers\DesignationController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\designation_ntpayscale;
use App\Models\designation_ntcpayscale;
use App\Models\designation;
use  Illuminate\Database\Query\Builder;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;

class NTpayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $non_teaching_payscale=ntpayscale::with('designations')->where('status','active')->orderBy('title')->paginate(15);
                                    
       // $non_teaching_payscale=DB::table('ntpayscales')->orderBy('title')->paginate(15);
        $design=DB::table('designations')->where('emp_type','Non-Teaching')->orderBy('design_name')->get();
       // dd($design);
        $ntcps=ntcpayscale::with('designations')->where('status','active')->orderby('id')->paginate(15);
        //dd($ntcps);
        //$ntcps = DB::table('ntcpayscales')->with('designations')->orderBy('id')->paginate(15);
        //dd($ntcps);
        return view('ESTB.payscales.non_teaching.index',compact(['non_teaching_payscale','ntcps','design']));
    
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
    public function store(StorentpayscaleRequest $request)
    {
        $non_teaching_payscale=new ntpayscale();
        $non_teaching_payscale->title=$request->title;
        $non_teaching_payscale->payband=$request->payband;
        $non_teaching_payscale->wef=$request->wef;
        $non_teaching_payscale->created_at=Carbon::Now();
        $non_teaching_payscale->status='active';
        $result = $non_teaching_payscale->save();
        $design=$request->ntdesign;
        //dd($non_teaching_payscale->designations()->attach($design[0]));
        //dd($design);
        foreach( $design as $d){
            //dd($d);
            $designation=designation::find($d);
            $non_teaching_payscale->designations()->attach($designation,['start_date'=>$request->wef,'gcr'=>$request->gcr]);
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
    public function show(ntpayscale $ntpayscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ntpayscale $ntpayscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatentpayscaleRequest $request, ntpayscale $ntpayscale)
    {
        //
        
        $ntpayscale->title=$request->title;
        $ntpayscale->payband=$request->payband;
        $ntpayscale->wef=$request->wef; 
        $design=$request->ntdesign;
        //case 1: exists in table and in ui checked do nothing
        //case 2: exists in table and in ui not checked update to closed_date
        //case 3: does not exists in table and checked in ui insert in pivot table
        //setting flag=0 based on comparision with database and UI change flag value to 1,2 or 3
        //to execute the appropriate code as listed in the above 3 cases.

        foreach ($ntpayscale->designations as $des) {
            $flag=0;
            //to Join the pivot table with master table( PT : designation_ntpayscale MT: designations and ntpayscales)
            $ntpayscale=$ntpayscale->load('designations');
            foreach( $design as $d)
            {
                //dd($des->id. $d);
                if($des->id==$d){
                    $flag=2;
                   
                } 
            
            }
        
            if($flag==0){
                $ntpayscale->designations()->updateExistingPivot($des->id,['end_date'=>Carbon::Now(),'status'=>'inactive']);
            }
        }
        foreach( $design as $d)
        {
            $flag=0;
            $designation=designation::find($d);
            foreach($ntpayscale->designations as $des){
                if($des->id==$d){
                   $flag=1; //database table contains the checked designation.
                   //check if this designation is inactive and make it inactive
                    if($des->pivot->status=='inactive'){
                        $ntpayscale->designations()->attach($designation,['start_date'=>Carbon::Now()]);
                    }
                }
            }
            if($flag==0){
                    $flag=3; //database table does not contain the checked designation so insert the designation in the cross table
                    $ntpayscale->designations()->attach($designation,['start_date'=>Carbon::Now()]);
                }
        }
        
        
        $result = $ntpayscale->update();
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
    public function destroy(ntpayscale $ntpayscale)
    {
        //
        
        $ntpayscale->status='inactive';
        $ntpayscale->closedon=Carbon::Now();
       $result= $ntpayscale->update();
       //to join pivot table with master table.
       $ntpayscale=$ntpayscale->load('designations');
       foreach($ntpayscale->designations as $des){
            $result = $ntpayscale->designations()->updateExistingPivot($des->id,['end_date'=>Carbon::Now(),'status'=>'inactive']);
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
