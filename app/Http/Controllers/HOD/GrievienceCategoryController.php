<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use App\Models\grievience\grievience_category;
use App\Http\Requests\Storegrievience_categoryRequest;
use App\Http\Requests\Updategrievience_categoryRequest;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;


class GrievienceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //   $grievience_category=DB::table('grievience_categories')->orderBy('category_name')->get();
    //  return view('HOD.grievancecategory',compact('grievience_category'));

    // }
    public function index()
    {
        $user = Auth::user(); 
        $department_id = Session::get('deptid');
        
        // Fetch events only for the specific department
        $deptgriv = grievience_category::with('department')
            ->whereHas('department', function ($query) use ($department_id) {
                $query->where('departments.id', $department_id);
            })
            ->get();
    
        $departments = DB::table('departments')->where('status', 'active')->get();

       $grievience_category=grievience_category::get();
        return view('HOD.grievancecategory', compact('deptgriv', 'departments', 'user', 'department_id','grievience_category'));
    
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
    public function store(Storegrievience_categoryRequest $request)
    {
        //dd($request);
        $grievience_category=new grievience_category();
        $grievience_category->user_id = Auth::id();
        $grievience_category->category_name=$request->category_name;
        $grievience_category->save();
        $categoryinsertedId = $grievience_category->id;
        if($categoryinsertedId > 0){
            $status = 1;
            return redirect('/HOD/grievancecategory')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/HOD/grievancecategory')->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(grievience_category $grievience_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grievience_category $grievience_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updategrievience_categoryRequest $request, grievience_category $grievience_category)
    {
        $grievience_category->category_name=$request->category_name;
        
        $result = $grievience_category->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
         return redirect('/HOD/grievancecategory')->with('status', $status);
    }


    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grievience_category $grievience_category)
    {
        $result =$grievience_category->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/HOD/grievancecategory')->with('status', $status);
    }
}
