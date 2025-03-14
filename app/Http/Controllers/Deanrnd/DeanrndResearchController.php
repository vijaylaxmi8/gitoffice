<?php

namespace App\Http\Controllers\Deanrnd;

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

class DeanrndResearchController extends Controller
{
    //
    public function conferences_attendee(Request $request)
    {
        
        
        $conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
         //dd($conferences_attendees);
    
        return view('/Deanrnd/Teaching/research/conferenceattended',compact(['conferences_attendees']));
    }

    public function conferences_conducted(Request $request)
    {
        
        
        $conferences_conducted=DB::table('conferences_conducteds')
                                            ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                            ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            ->select('conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
         //dd($conferences_attendees);
    
        return view('/Deanrnd/Teaching/research/conferenceconducted',compact(['conferences_conducted']));
    }

    public function publication(Request $request)
    {
        
        
        $publication=DB::table('publications')
                                    ->join('staff','staff.id','=','publications.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('employee_types.employee_type','=','Teaching')
                                    //->where('staff.employee_type','=','Teaching')
                                    ->select('publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                    ->get();
                                           
                                           
        // dd($publication);
    
        return view('/Deanrnd/Teaching/research/publication',compact(['publication']));
    }

    public function funded_project(Request $request)
    {
        
        
        $fundedproject=DB::table('funded_projects')
                                           
                                ->join('staff','staff.id','=','funded_projects.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('employee_types.employee_type','=','Teaching')
                                //->where('staff.employee_type','=','Teaching')
                                ->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->get();
        // dd($fundedproject);
    
        return view('/Deanrnd/Teaching/research/fundedproject',compact(['fundedproject']));
    }

    public function patents(Request $request)
    {
        
        
        $patents=DB::table('patents')
                                           
                            ->join('staff','staff.id','=','patents.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            ->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
        // dd($patents);
    
        return view('/Deanrnd/Teaching/research/patents',compact(['patents']));
    }
    public function copyrights(Request $request)
    {
        
        
        $copyrights=DB::table('copyrights')
                                           
                            ->join('staff','staff.id','=','copyrights.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            ->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                        //  dd($copyrights);
    
        return view('/Deanrnd/Teaching/research/copyrights',compact(['copyrights']));
    }

    public function general_achievement(Request $request)
    {
        
        
        $general_achievements=DB::table('general_achievements')
                                           
                            ->join('staff','staff.id','=','general_achievements.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            ->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                        
    
        return view('/Deanrnd/Teaching/research/achivements',compact(['general_achievements']));
    }




}






