<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\event;
use App\Models\User;
use App\Models\department;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class HodEventController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $department_id = Session::get('deptid');
        
        // Fetch events only for the specific department
        $deptevent = event::with('department')
            ->whereHas('department', function ($query) use ($department_id) {
                $query->where('departments.id', $department_id);
            })
            ->get();
    
        $departments = DB::table('departments')->where('status', 'active')->get();

       
        return view('HOD.event', compact('deptevent', 'departments', 'user', 'department_id'));
    
    }
    

    public function store(StoreeventRequest $request)
    {
        
        //dd($request);
        $department_id=Session ::get('deptid');
        $hodevent=new event();
        $hodevent->user_id = Auth::id();
        $hodevent->event_name=$request->event_name;
        $hodevent->start_date=$request->start_date;
        $hodevent->to_date=$request->to_date;
        $hodevent->location=$request->location;
        $hodevent->organizers=$request->organizers;
        $hodevent->event_website=$request->event_website;
      
        if($request->staff_type=="Teaching")
        {
            
            $hodevent->staff_type=$request->staff_type;       
        }
        elseif($request->staff_type=="Non-Teaching")
        {
            $hodevent->staff_type=$request->staff_type;      
        }
        elseif($request->staff_type=="All")
        {
            $hodevent->staff_type=$request->staff_type;      
        }
        $hodevent->save();
        $depart = $request->departments; 
        //dd($depart);
        foreach ($depart as  $d ) {
            $hodevent->department()->attach($d);
           //dd($event);
        }

       // $eventresult=$event->department()->attach($request->department_id);
        $HodeventinsertedId = $hodevent->id;
        if($HodeventinsertedId > 0){
            $status = 1;
            return redirect('/HOD/event')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/HOD/event')->with('status', $status);
        }
       
        
    }
    public function update(UpdateeventRequest $request, event $event)
    {
        //dd($request);
        $event->event_name=$request->e_event_name;
        $event->start_date=$request->e_start_date;
        $event->to_date=$request->e_to_date;
        $event->location=$request->e_location;
        $event->organizers=$request->e_organizers;
        $event->event_website=$request->e_event_website;
        $event->staff_type=$request->e_staff_type;  
        $result = $event->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/HOD/event')->with('status', $status);
  
    }
    public function destroy(event $event)
    {
        // Detach and delete associated records
        $event->department()->detach();
        
        // Delete the event
        $result = $event->delete();
    
        // Check if the deletion was successful
        if ($result) {
            $status = 1;
        } else {
            $status = 0;
        }
    
        // Redirect with status message
        return redirect('/HOD/event')->with('status', $status);
    }
    


}
