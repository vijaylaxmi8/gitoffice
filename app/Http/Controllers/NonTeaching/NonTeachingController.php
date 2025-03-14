<?php

namespace App\Http\Controllers\NonTeaching;


use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\user;
use App\Models\event;
use Appp\Models\notice;
use App\Enums\UserRoles;
use Illuminate\Http\Request;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\department;
use App\Models\designation;
use App\Models\ntpayscales;
use App\Models\ntcpayscales;
use App\Models\users;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;
use Hash;
use Session;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class NonTeachingController extends Controller
{
    //
    public function index()
     {

        return view('Staff.Non-Teaching.construction');
    }

    public function dashboard(Request $request,staff $staff)
    {
        $user = Auth::user();
        //count of professional activity attended &conducted
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->with('activedepartments')->where('user_id','=',$user->id)->first();
        $dept_id=array();
        foreach($staff->activedepartments as $depts)
        {
            array_push( $dept_id,$depts->id);
        }
        $ntactivityattendedCount = $staff->professional_activity_attendee->count();
        $ntactivityconductedCount = $staff->professional_activity_conducted->count();

        //count of  department
        $deptcount=staff::with('departments')->where('user_id','=',$user->id)->first();
        $dept = $deptcount->departments->count();


        //Event information for if staff type is All 
        $departmentevent = DB::table('events')
        ->join('department_event', 'department_event.event_id', '=', 'events.id') 
        ->join('department_staff', 'department_staff.department_id', '=', 'department_event.department_id')
        ->whereIn('department_event.department_id', $dept_id)
        ->where(function ($query) use ($user) {
            $query->where('staff_type', '=', $user->role)
                ->orWhere('staff_type', '=', 'all');
        })
        ->select('events.*')->distinct()
        ->get();

        //notice
        $departmentnotice = DB::table('notices')
        ->join('department_notice', 'department_notice.notice_id', '=', 'notices.id') 
        ->join('department_staff', 'department_staff.department_id', '=', 'department_notice.department_id')
        ->whereIn('department_notice.department_id', $dept_id)
        ->where(function ($query) use ($user) {
            $query->where('staff_type', '=', $user->role)
                ->orWhere('staff_type', '=', 'all');
        })
        ->select('notices.*')->distinct()
        ->get();

        return view('Staff.Non-Teaching.dashboard',compact(['staff','ntactivityattendedCount','ntactivityconductedCount','dept','departmentevent','departmentnotice']));
    }

    public function departments(Request $request)
    {
        $user = Auth::user();
       
        $staff=staff::with('departments')->where('user_id','=',$user->id)->get();
      
        return view('Staff.Non-Teaching.departments',compact('staff'));
    
    }
    public function designations()
    {

         $user = Auth::user();
         
        $staff=staff::with('designations')->with('teaching_payscale')->with('consolidated_teaching_pay')->with('fixed_nt_pay')->with('ntpayscale') ->with('ntcpayscale')->where('user_id','=',$user->id)->first();
       
         return view('Staff.Non-Teaching.designations',compact('staff'));
     
     }
     public function associations(Request $request)
     {
        $user = Auth::user();
        $staff=staff::with('associations')->where('user_id','=',$user->id)->get();
        return view('Staff.Non-Teaching.associations',compact('staff'));
    
    }
    public function professional_activity_attendee(Request $request)
    {
        $user = Auth::user();
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->where('user_id','=',$user->id)->first();
    
        return view('Staff.Non-Teaching.professional_activity',compact(['staff']));
    }

    
   
    }


