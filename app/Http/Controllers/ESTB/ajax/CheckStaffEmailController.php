<?php

namespace App\Http\Controllers\ESTB\ajax;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class CheckStaffEmailController extends Controller
{
    //
    public function checkEmailId(Request $request){
        //for checking the email address from the database.

        $current_email = $request->input('current_email'); // Get the selected option from the relgion dropdown

        // Perform your logic to fetch options for the caste category dropdown based on the selected option
        $users = DB::table('users')->where('email', $current_email.'@git.edu')->get();
      // $user$ 
      // dd($users);

        return $users;
       // return response()->json($users); // Return the options as JSON
    }
}
