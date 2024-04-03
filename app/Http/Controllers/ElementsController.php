<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function navbar()
    {
        return view('pages.navbar');
    }
    public function mega_menu()
    {
        return view('pages.mega-menu');
    }
    public function tabs()
    {
        return view('pages.tabs');
    }
    public function scrollspy()
    {
        return view('pages.scrollspy');
    }
    public function breadcrumb()
    {
        return view('pages.breadcrumb');
    }
    public function pagination()
    {
        return view('pages.pagination');
    }
    public function grid()
    {
        return view('pages.grid');
    }
    public function columns()
    {
        return view('pages.columns');
    }
}
