<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $title = 'Reset Your Password';
        
        $body = 'Kindly Reset your Password';

        Mail::to('vcpatil@git.edu')->send(new WelcomeMail($title, $body));
      

        return "Email sent successfully!";
    }
}
