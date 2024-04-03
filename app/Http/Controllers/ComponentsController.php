<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function accordion()
    {
        return view('pages.accordion');
    }
    public function alerts()
    {
        return view('pages.alerts');
    }
    public function avatars()
    {
        return view('pages.avatars');
    }
    public function badges()
    {
        return view('pages.badges');
    }
    public function blockquotes()
    {
        return view('pages.blockquotes');
    }
    public function buttons()
    {
        return view('pages.buttons');
    }
    public function cards()
    {
        return view('pages.cards');
    }
    public function collapse()
    {
        return view('pages.collapse');
    }
    public function list_group()
    {
        return view('pages.list-group');
    }
    public function list_page()
    {
        return view('pages.list-page');
    }
    public function indicators()
    {
        return view('pages.indicators');
    }
    public function progress()
    {
        return view('pages.progress');
    }
    public function skeleton()
    {
        return view('pages.skeleton');
    }
    public function spinners()
    {
        return view('pages.spinners');
    }
    public function toast()
    {
        return view('pages.toast');
    }
}
