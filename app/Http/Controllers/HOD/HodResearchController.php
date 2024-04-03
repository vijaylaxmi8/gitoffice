<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Enums\UserRoles;
use App\Models\staff;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\conferences_attendee;
use App\Models\conferences_conducted;
use App\Models\publication;
use App\Models\funded_project;
use App\Models\patent;
use App\Models\copyright;
use App\Models\general_achievements;
use Session;
use Hash;
use Auth;


class HodResearchController extends Controller
{
    //
    public function hod_conferences_attendee(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            ->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
            
                                            
         //dd($conferences_attendees);
    
        return view('/HOD/Teaching/research/hodconferenceattended',compact(['conferences_attendees']));
    }
    public function hod_conferences_conducted(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $conferences_conducted=DB::table('conferences_conducteds')
                                            ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                            ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            ->select('conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
         //dd($conferences_attendees);
    
        return view('/HOD/Teaching/research/hodconferenceconducted',compact(['conferences_conducted']));
    }
    public function hod_publication(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $publication=DB::table('publications')
                                    ->join('staff','staff.id','=','publications.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('employee_types.employee_type','=','Teaching')
                                    //->where('staff.employee_type','=','Teaching')
                                    ->where('department_id','=',$department_id)
                                    ->select('publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                    ->get();
                                           
                                           
        // dd($publication);
    
        return view('/HOD/Teaching/research/hodpublication',compact(['publication']));

    }
    public function hod_funded_project(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $fundedproject=DB::table('funded_projects')
                                           
                                    ->join('staff','staff.id','=','funded_projects.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('employee_types.employee_type','=','Teaching')
                                    //->where('staff.employee_type','=','Teaching')
                                    ->where('department_id','=',$department_id)
                                    ->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                    ->get();
        // dd($fundedproject);
    
        return view('/HOD/Teaching/research/hodfundedproject',compact(['fundedproject']));
    }
    public function hod_patents(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $patents=DB::table('patents')
                                           
                        ->join('staff','staff.id','=','patents.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                       // ->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        ->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->get();
        // dd($patents);
    
        return view('/HOD/Teaching/research/hodpatents',compact(['patents']));
    }
    public function hod_copyrights(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $copyrights=DB::table('copyrights')
                                           
                            ->join('staff','staff.id','=','copyrights.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                           // ->where('staff.employee_type','=','Teaching')
                            ->where('department_id','=',$department_id)
                            ->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                        //  dd($copyrights);
    
        return view('/HOD/Teaching/research/hodcopyrights',compact(['copyrights']));
    }

    public function hod_general_achievement(Request $request)
    {
        
        $department_id=Session ::get('deptid');
        $general_achievements=DB::table('general_achievements')
                                           
                            ->join('staff','staff.id','=','general_achievements.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                           // ->where('staff.employee_type','=','Teaching')
                            ->where('department_id','=',$department_id)
                            ->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                        
    
        return view('/HOD/Teaching/research/hodachivements',compact(['general_achievements']));
    }


}
