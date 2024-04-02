<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function users(){
        return view('Admin.users');
    }
}
