<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceduiController extends Controller
{
    public function rangeslider()
    {
        return view('pages.rangeslider');
    }
    public function calendar()
    {
        return view('pages.calendar');
    }
    public function carousel()
    {
        return view('pages.carousel');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function sweetalert()
    {
        return view('pages.sweetalert');
    }
    public function ratings()
    {
        return view('pages.ratings');
    }
    public function draggable()
    {
        return view('pages.draggable');
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function treeview()
    {
        return view('pages.treeview');
    }
    public function filemanager()
    {
        return view('pages.filemanager');
    }
    public function filemanager_list()
    {
        return view('pages.filemanager-list');
    }
    public function file_details()
    {
        return view('pages.file-details');
    }
}
