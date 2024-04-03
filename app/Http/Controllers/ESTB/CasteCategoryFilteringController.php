<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\religion;
use App\Models\castecategory;
use App\Http\Controllers\Controller;

class CasteCategoryFilteringController extends Controller
{
    //
    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');
        $religion = religion::find( $request->query('religion_id'));// for finding the specific caste categories of that religion
        
        //dd();
        if (!empty($filter)) {
            
            $castes=castecategory::sortable()->orderBy('caste_name')
            ->where('castecategories.caste_name', 'like', '%'.$filter.'%')
            ->orWhere('castecategories.subcastes_name', 'like', '%'.$filter.'%')
            ->orWhere('castecategories.category', 'like', '%'.$filter.'%')
            ->orWhere('castecategories.category_no', 'like', '%'.$filter.'%')
            ->where('religion_id',$religion->id)
            ->paginate();
            
        } else {
            $castes=DB::table('castecategories')->orderBy('caste_name')->paginate();
        }
        //dd($castecategory[0]->religion_id);
        //$religion = religion::find($castes[0]->religion_id);
        
        //dd($designation);
        return view('ESTB.castecategory.index', compact('castes', 'religion', 'filter'));
    }
}
