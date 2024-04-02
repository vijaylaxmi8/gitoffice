<?php

namespace App\Http\Controllers\Principaloffice;

use App\Http\Controllers\Controller;
use App\Enums\UserRoles;
use App\Models\user;
use App\Models\users;
use App\Models\event;
use App\Models\notice;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorenoticeRequest;
use App\Http\Requests\UpdatenoticeRequest;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Session;
use Hash;
use Auth;

use Illuminate\Http\Request;

class PrincipalOfficeController extends Controller
{
    //
    public function dashboard()
    {
        // $user = Auth::user();
        $deptevent = event::with('department')->get();

        $dept_notice = notice::with('department')->get();
        // dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();
        return view('Principaloffice.podashboard', compact('deptevent', 'departments','dept_notice'));
    }

}
