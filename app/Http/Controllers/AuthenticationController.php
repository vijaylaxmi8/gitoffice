<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function signin()
    {
        return view('pages.signin');
    }
    public function signin_cover()
    {
        return view('pages.signin-cover');
    }
    public function signin_cover2()
    {
        return view('pages.signin-cover2');
    }
    public function signup()
    {
        return view('pages.signup');
    }
    public function signup_cover()
    {
        return view('pages.signup-cover');
    }
    public function signup_cover2()
    {
        return view('pages.signup-cover2');
    }
    public function createpassword()
    {
        return view('pages.createpassword');
    }
    public function createpassword_cover()
    {
        return view('pages.createpassword-cover');
    }
    public function createpassword_cover2()
    {
        return view('pages.createpassword-cover2');
    }
    public function forgot()
    {
        return view('pages.forgot');
    }
    public function forgot_cover()
    {
        return view('pages.forgot-cover');
    }
    public function forgot_cover2()
    {
        return view('pages.forgot-cover2');
    }
    public function reset()
    {
        return view('pages.reset');
    }
    public function reset_cover()
    {
        return view('pages.reset-cover');
    }
    public function reset_cover2()
    {
        return view('pages.reset-cover2');
    }
    public function lockscreen()
    {
        return view('pages.lockscreen');
    }
    public function lockscreen_cover()
    {
        return view('pages.lockscreen-cover');
    }
    public function lockscreen_cover2()
    {
        return view('pages.lockscreen-cover2');
    }
    public function verification()
    {
        return view('pages.verification');
    }
    public function verification_cover()
    {
        return view('pages.verification-cover');
    }
    public function verification_cover2()
    {
        return view('pages.verification-cover2');
    }
    public function maintenance()
    {
        return view('pages.maintenance');
    }
    public function comingsoon()
    {
        return view('pages.comingsoon');
    }
    public function construction()
    {
        return view('pages.construction');
    }
    public function error404()
    {
        return view('pages.error404');
    }
    public function error500()
    {
        return view('pages.error500');
    }
}