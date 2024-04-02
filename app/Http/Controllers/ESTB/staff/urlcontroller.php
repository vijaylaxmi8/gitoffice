<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\association;
use Illuminate\Support\Facades\DB;
use App\Models\consolidated_teaching_pay;
use App\Models\fixed_nt_pay;
use App\Models\designation;

class urlcontroller extends Controller
{
    public function qualifications(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/ESTB/staff/staffqualification',compact(['staff','qualifications']));
    }
     
    public function assocaitons(staff $staff){
        $associations = association::where('status','active')->get();
        return view('/ESTB/staff/staffassociation',compact(['staff','associations']));
    }

    public function departments(staff $staff){
        $departments = DB::table('departments')->where('status','active')->get();
        return view('/ESTB/staff/staffdepartments',compact(['staff','departments']));
    }

    public function designationpayscales(staff $staff){
        $emp_type=$staff->latest_employee_type()->first();
        $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();
       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();
       //dd($staff->employee_type);
       $payscales="";
       
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();   
            $consolidated_teaching_pay=consolidated_teaching_pay::where('staff_id',$staff->id)->get();

            // $payscales=DB::table('ntpayscales')->where('status','active')->get(); 
            $ntpayscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
       
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
            $ntcpayscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
            $fixed_nt_pay=fixed_nt_pay::where('staff_id',$staff->id)->orderBy('id','desc')->get();
            
            $departments = DB::table('departments')->where('status','active')->get();
        

        
       return view('/ESTB/staff/staffdesignationpayscale',compact(['staff','designations','add_designations','payscales','ntpayscales','consolidated_teaching_pay','ntcpayscales','fixed_nt_pay','departments']));
       
    } 
}
