<?php

namespace App\Http\Controllers;

use App\Models\non_teaching_payscale;
use App\Http\Requests\Storenon_teaching_payscaleRequest;
use App\Http\Requests\Updatenon_teaching_payscaleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\NTdesignPayscaleController;
use App\Models\ntdesign_payscale;

class NonTeachingPayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $non_teaching_payscale=DB::table('non_teaching_payscales as ntp')
                                    
                                    ->join('ntdesign_payscales as ntdp', 'ntp.id', '=', 'ntdp.payscale_id')
                                    ->join('designations as d', 'ntdp.designlevel_id', '=', 'd.level')
                                    ->orderBy('ntp.title')
                                    ->paginate(15);
        $design_levels=DB::table('designations')->select('level')->where('emp_type',1)->groupBy('level')->get();
        
        $ntcps=DB::table('n_t_consolidated_payscales')->orderby('id')->paginate(15);

        return view('ESTB.payscales.non_teaching.index',compact(['non_teaching_payscale','ntcps','design_levels']));
    
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
    public function store(Storenon_teaching_payscaleRequest $request)
    {
        $non_teaching_payscale=new Non_teaching_payscale();
        $non_teaching_payscale->title=$request->title;
        $non_teaching_payscale->payband=$request->payband;
        $non_teaching_payscale->wef=$request->wef;
        $non_teaching_payscale->created_at=Carbon::Now();
        $non_teaching_payscale->status='active';
        $result = $non_teaching_payscale->save();

        $ntdesign_payscale=new ntdesign_payscales();
        $ntdesign_payscale->designlevel_id=$request->designlevel_id;
        $ntdesign_pyscale->payscale_id=$non_teaching_payscale->id;
        $ntdesign_payscale->status='active';
        $ntdesign_payscale->created_at=Carbon::Now();
        $ntdesign_payscale->save();

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
    public function show(non_teaching_payscale $non_teaching_payscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(non_teaching_payscale $non_teaching_payscale)
    {
        $ntp=$non_teaching_payscale;
        return view('ESTB.payscales.non_teaching.dummy',compact('ntp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatenon_teaching_payscaleRequest $request, non_teaching_payscale $non_teaching_payscale)
    {
        
         $non_teaching_payscale->title=$request->title;
        $non_teaching_payscale->payband=$request->payband;
        $non_teaching_payscale->wef=$request->wef; 
        if($request->status=='active'){
           $non_teaching_payscale->status='active'; 
        }
        $non_teaching_payscale->closedon=$request->closedon;
        $result = $non_teaching_payscale->update();
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
    public function destroy(non_teaching_payscale $non_teaching_payscale)
    {
        //
    
        
        $non_teaching_payscale->status='inactive';
       $result= $non_teaching_payscale->update();
       //dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/non_teaching')->with('status', $status);
    }
}
