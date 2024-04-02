<?php

namespace App\Http\Controllers\ESTB\ajax;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\religion;
use App\Models\castecategory;
use App\Http\Controllers\Controller;

class GetCasteCategoryListController extends Controller
{
    //
    public function getCasteCategoryList(Request $request)
    {
        $r_id = $request->input('r_id'); // Get the selected option from the relgion dropdown

        // Perform your logic to fetch options for the caste category dropdown based on the selected option
        $castecategories =DB::table('castecategories')->where('religion_id', $r_id)->get();
        //dd($castecategories);
        return response()->json($castecategories); // Return the options as JSON
    }

}
