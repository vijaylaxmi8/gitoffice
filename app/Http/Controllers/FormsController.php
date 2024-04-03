<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form_elements()
    {
        return view('pages.form-elements');
    }
    public function advanced_forms()
    {
        return view('pages.advanced-forms');
    }
    public function form_inputgroup()
    {
        return view('pages.form-inputgroup');
    }
    public function file_upload()
    {
        return view('pages.file-upload');
    }
    public function form_checkbox()
    {
        return view('pages.form-checkbox');
    }
    public function form_radio()
    {
        return view('pages.form-radio');
    }
    public function form_switch()
    {
        return view('pages.form-switch');
    }
    public function form_select()
    {
        return view('pages.form-select');
    }
    public function form_layouts()
    {
        return view('pages.form-layouts');
    }
    public function form_validations()
    {
        return view('pages.form-validations');
    }
    public function quil_editor()
    {
        return view('pages.quil-editor');
    }
}
