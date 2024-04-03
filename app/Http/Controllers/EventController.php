<?php

namespace App\Http\Controllers;


use App\Models\event;
use App\Models\User;
use App\Models\department;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Support\Facades\DB;
use Auth;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $deptevent = event::with('department')->get();
        // dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();
        return view('Principaloffice.poevents',compact('deptevent','departments'));

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
    public function store(StoreeventRequest $request)
    {
        
        //dd($request);
        $event=new event();
        $event->user_id = Auth::id();
        $event->event_name=$request->event_name;
        $event->start_date=$request->start_date;
        $event->to_date=$request->to_date;
        $event->location=$request->location;
        $event->organizers=$request->organizers;
        $event->event_website=$request->event_website;
       // $event->staff_type=$request->staff_type;
        if($request->staff_type=="Teaching")
        {
            
            $event->staff_type=$request->staff_type;       
        }
        elseif($request->staff_type=="Non-Teaching")
        {
            $event->staff_type=$request->staff_type;      
        }
        elseif($request->staff_type=="All")
        {
            $event->staff_type=$request->staff_type;      
        }
        $event->save();
        $depart = $request->departments; 
        //dd($depart);
        foreach ($depart as  $d ) {
            $event->department()->attach($d);
           //dd($event);
        }

       // $eventresult=$event->department()->attach($request->department_id);
        $eventinsertedId = $event->id;
        if($eventinsertedId > 0){
            $status = 1;
            return redirect('/Principaloffice/poevents')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/Principaloffice/poevents')->with('status', $status);
        }
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
        return redirect('/Principaloffice/poevents')->with('status', $status);
  
    }

    /**
     * Remove the specified resource from storage.
     */
    

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
        return redirect('/Principaloffice/poevents')->with('status', $status);
    }
    
}
