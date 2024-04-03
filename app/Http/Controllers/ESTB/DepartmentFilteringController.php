<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\department;
use App\Http\Controllers\Controller;

class DepartmentFilteringController extends Controller
{
    //
    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');
        
        if (!empty($filter)) {
            $department=department::sortable()->orderBy('dept_name')
            ->where('departments.dept_name', 'like', '%'.$filter.'%')
            ->paginate();
            
        } else {
            $department=DB::table('departments')->orderBy('dept_name')->paginate();
        }
        //dd($designation);
        return view('ESTB.departments.index', compact('department', 'filter'));
    }
}
