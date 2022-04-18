<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function __construct(){
        $this->middleware('auth.instructor');
    }
    public function dashboard(request $req){
        $username = $req->session()->get('username');
        return view('instructor.dashboard')->with('username',$username);
    }
}
