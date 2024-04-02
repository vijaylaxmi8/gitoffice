<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\designation;
use App\Http\Controllers\Controller;

class DesignationFilteringController extends Controller
{
    //
    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');
        
        if (!empty($filter)) {
            $designation=designation::sortable()->orderBy('emp_type')->orderBy('design_name')
            ->where('designations.design_name', 'like', '%'.$filter.'%')
            ->paginate();
            
        } else {
            $designation=DB::table('designations')->orderBy('emp_type')->orderBy('design_name')->paginate();
        }
        //dd($designation);
        return view('ESTB.designations.index', compact('designation', 'filter'));
    }
}
