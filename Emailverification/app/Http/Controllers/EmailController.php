<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    //

    public function Emailverification(){
        $e_subject = "Hello, I am Rozina Akter";
        $e_body  = "My id is 18-38557-2";
        Mail::to('rozinaranu1239@gmail.com')->send(new SendEmail($e_subject,$e_body));
    }
}
