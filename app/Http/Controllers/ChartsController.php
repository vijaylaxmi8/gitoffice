<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function apex_charts()
    {
        return view('pages.apex-charts');
    }
    public function chartjs()
    {
        return view('pages.chartjs');
    }
    public function echartjs()
    {
        return view('pages.echartjs');
    }
}

