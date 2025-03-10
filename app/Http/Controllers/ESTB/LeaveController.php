<?php

namespace App\Http\Controllers\ESTB;

use App\Models\leave;
use Auth;
use App\Models\staff;
use App\Models\user;
use App\Models\holidayrh;
use App\Http\Requests\StoreleaveRequest;
use App\Http\Requests\UpdateleaveRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\leave_staff_applications;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();
        
        return view('ESTB.leaves.index',compact('leaves'));
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
    public function store(StoreleaveRequest $request)
    {
        $leave=new leave();
        $leave->longname=$request->longname;
        $leave->shortname=$request->shortname;
        $leave->vacation_type=$request->vacation_type;
        $leave->max_entitlement=$request->max_entitlement;
        $leave->min_days=$request->min_days;
        $leave->max_days=$request->max_days;
        $leave->leave_wef=$request->leave_wef;
        $leave->applicable_to=$request->applicable_to;
        $leave->created_at=Carbon::now();
        $insert=$leave->save(); 
        if($insert)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/leaves')->with('status',$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(leave $leave)
    {
        //
       
        if($leave->status=='inactive'){
            $leaves=leave::with('latest_combine_leave')->with(['leave_rules'=>function($query){
                $query->orderBy('leave_rules.id','desc');
            }]);
        }
        else
        {
          
             $leaves=leave::with('combine_leave')->with([
                'leave_rules'=>function($query){
                $query->orderBy('leave_rules.id','desc');
            }
            ])->where('id',$leave->id)->first();
            
        }
       
        $allleaves=leave::orderBy('longname')->get();
   
        return view('ESTB.leaves.leave_rules.index',compact('leaves','allleaves'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateleaveRequest $request, leave $leave)
    {
        $leave->longname=$request->longname;
        $leave->shortname=$request->shortname;
        $leave->vacation_type=$request->vacation_type;
        $leave->max_entitlement=$request->max_entitlement;
        $leave->min_days=$request->min_days;
        $leave->max_days=$request->max_days;
        $leave->leave_wef=$request->leave_wef;
        $leave->leave_end_date=$request->leave_end_date;
        $leave->applicable_to=$request->applicable_to;
        if($request->leave_end_date)
        {
            $leave->status='inactive';
            
            $leavecombinations=$leave->combine_leave()->get();
          
            foreach($leavecombinations as $cl)
            {
                $cl->pivot->status='inactive';
                $cl->pviot->closing_wef=$request->leave_end_date;
                $cl->pivot->update();
            }
            $leave_rules=$leave->leave_rules()->where('status','active')->get();
          
            foreach($leave_rules as $lr)
            {
               // dd($lr);
                $lr->cf_closing_date=$request->leave_end_date;
               // $lr->cf_closing_gcr=$request->leave_end_date;
                $lr->enc_closing_date =$request->leave_end_date ;
                //$lr->enc_closing_gcr =$request->leave_end_date ;
                $lr->gap_closing_date=$request->leave_end_date;
               // $lr->gap_closing_gcr=$request->leave_end_date;
                $lr->created_at=Carbon::Now();
                $lr->status='inactive';
                $lr->update();
            }
            
        }
        $leave->created_at=Carbon::now();
        $insert=$leave->save(); 
        if($insert)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/leaves')->with('status',$status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leave $leave)
    {
        
    }

    public function calender_view(){

        // $user = Auth::user();
        // $staff_id_from_user = staff::where('user_id','=',$user->id)->first();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();

        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->get();
       
        //dd($staff->latest_employee_type);

        // if(count($staff->latest_additional_designation)>0)
        // {
        //     foreach($staff->latest_additional_designation as $addtnl_design)
        //     {
                
        //         if($addtnl_design->isvacational=="Non-Vacational")
        //         {
        //             $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    -> whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','Non-vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
                           
        //         }
        //         else
        //         {
        //             $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    ->whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //         }
        //     }
             
        // }
        // else
        // {
        //     //dd($staff->latestassociation()->first()->asso_name=='Confirmed');
        //     if($staff->latest_employee_type[0]->employee_type=="Teaching" && ($staff->latestassociation()->first()->asso_name=='Confirmed'||$staff->latestassociation()->first()->asso_name=='Promotional Probationary'))
        //     {
        //         $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    ->whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //     }
        //     else
        //     {
        //         $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    -> whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','Non-vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //     }
        // }


        return view ('ESTB.leaves.leave_calender.index');
    }

    public function hollidayrh_events(){

        $holidayrh=holidayrh::select('id','title','start','type')->get();
        //dd($holidayrh);
        return response()->json($holidayrh);

    }

       //used in ESTB leaves calender section
       public function fetchAllleaveevents(Request $request){
        
        //$user = Auth::user();
        //$staff = staff::where('user_id','=',$user->id)->first();
        // Process the date as needed (e.g., save to database, perform calculations)
        $leave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        ->join('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        //->where('leave_staff_applications.staff_id',$staff->id)
        
        ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),'leaves.shortname AS title','leave_staff_applications.start AS start', 'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id','leave_staff_applications.appl_status AS appl_status','leave_staff_applications.id AS Application_id', 'leave_staff_applications.reason AS reason')->get();
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }
}
