<?php

namespace App\Http\Controllers\grievience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\grievience\grievience_category;

class ExamOfficeController extends Controller
{

    public function dashboard()
    {
       $grievience_category=grevience_category::get();
        return view('Examoffice.dashboard',compact('grievience_category'));
    }
}
