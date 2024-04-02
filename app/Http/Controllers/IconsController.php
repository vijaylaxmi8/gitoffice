<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function tabler_icons()
    {
        return view('pages.tabler-icons');
    }
    public function remix_icons()
    {
        return view('pages.remix-icons');
    }
}
