<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicuiController extends Controller
{
    public function dropdown()
    {
        return view('pages.dropdown');
    }
    public function modal()
    {
        return view('pages.modal');
    }
    public function offcanvas()
    {
        return view('pages.offcanvas');
    }
    public function tooltip_popovers()
    {
        return view('pages.tooltip-popovers');
    }
    public function tables()
    {
        return view('pages.tables');
    }
    public function datatables()
    {
        return view('pages.datatables');
    }
    public function edittable()
    {
        return view('pages.edittable');
    }
}
