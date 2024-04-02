<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\user;
use Session;
use App\Enums\UserRoles;
use Hash;

use Illuminate\Http\Request;
use App\Models\designation;
use App\Models\department;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscales;
use App\Models\ntcpayscales;
use App\Models\users;
use App\Models\event;
use App\Models\notice;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;


class TeachingController extends Controller
{
     //under construction url
     public function index()
     {

        return view('Staff.Teaching.construction');
    }

    public function dashboard(Request $request,staff $staff)
    {
        $user = Auth::user();
        //count of Teaching and Professional Activity
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->with('activedepartments')->where('user_id','=',$user->id)->first();
        $dept_id=array();
        foreach($staff->activedepartments as $depts)
        {
            array_push( $dept_id,$depts->id);
        }
       //dd($staff);
        $attendedActivitiesCount = $staff->professional_activity_attendee->count();
        $conductedActivitiesCount = $staff->professional_activity_conducted->count();

        //count of research activities
        $research=staff::with('conferences_attendee')->with('conferences_conducted')->with('publications')->with('book_publications')->with('funded_project')->with('consultancy')->with('general_achievements')->with('patent')->with('copyright')->where('user_id','=',$user->id)->first();

        $conferenceattendedcount = $research->conferences_attendee->count();
        $conferenceconductedcount = $research->conferences_conducted->count();
        $publicationcount = $research->publications->count();
        $book_publicationcount = $research->book_publications->count();
        $funded_projectcount = $research->funded_project->count();
        $consultancycount = $research->consultancy->count();
        $patentcount = $research->patent->count();
        $copyrightcount = $research->copyright->count();
        $general_achievementscount = $research->general_achievements->count();

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

     //dd($departmentevent);

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

    return view('Staff.Teaching.dashboard',compact(['staff','departmentevent','departmentnotice','attendedActivitiesCount','conductedActivitiesCount','conferenceattendedcount','conferenceconductedcount','publicationcount','book_publicationcount','funded_projectcount','consultancycount','patentcount','copyrightcount','general_achievementscount','dept']));
           
       
       
    }

    public function departments(Request $request){
        $user = Auth::user();
       
        $staff=staff::with('departments')->where('user_id','=',$user->id)->get();
      
        return view('Staff.Teaching.departments',compact('staff'));
    
    }
    public function associations(Request $request){

        $user = Auth::user();
        
        $staff=staff::with('associations')->where('user_id','=',$user->id)->get();
        
       
       
        return view('Staff.Teaching.associations',compact('staff'));
    
    }

    public function designations(){
        
       $user = Auth::user();
        
       $staff=staff::with('designations')->with('teaching_payscale')->with('consolidated_teaching_pay')->with('fixed_nt_pay')->with('ntpayscale') ->with('ntcpayscale')->where('user_id','=',$user->id)->first();
      
        return view('Staff.Teaching.designations',compact('staff'));
    
    }

   
}
