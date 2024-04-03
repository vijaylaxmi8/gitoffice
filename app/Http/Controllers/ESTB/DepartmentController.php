<?php

namespace App\Http\Controllers\ESTB;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //  DB::statement('ALTER TABLE departments ADD mobile VARCHAR(13)' );
     
        $department=department::sortable()->orderBy('dept_name')->get();
        return view('ESTB.departments.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ESTB.departments.dummy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredepartmentRequest $request)
    {
        // dd($request);
        $department=new department();
        $department->dept_name=$request->dept_name;
        $department->dept_shortname=$request->dept_shortname;
        $department->yoe=$request->yoe;
        $department->created_at = Carbon::now();
        $department->status='active';
        $department->save();

        $DeptinsertedId = $department->id;

        //dd($insertedId);
        if($DeptinsertedId > 0){
            $status = 1;
            return redirect('/ESTB/departments')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/departments')->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
     //   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        $department->dept_name=$request->edit_dept_name;
        $department->dept_shortname=$request->edit_dept_shortname;
        if($request->yoe){
            $department->yoe=$request->edit_yoe;
        }
        if($request->status=='active'){
            $department->status='active';
        }  
        $result = $department->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/departments')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
        $department->status='inactive';
        $result = $department->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/departments')->with('status', $status);
    }
}
