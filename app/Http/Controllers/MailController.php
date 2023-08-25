<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignUp;

class MailController extends Controller
{
    public function sendMail(){
        $name = 'Mattia';
        Mail::to('mattia.pirini@gmail.com')->send(new SignUp($name));

        return view('mail');

    }
}
