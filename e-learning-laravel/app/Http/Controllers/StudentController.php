<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth.student');
    }
    public function dashboard(Request $req){
        $username = $req->session()->get('username');
        $courses = Course::where('owner_id',$req->session()->get('id'))->get();
        return view('student.dashboard')->with('username',$username)->with('courses',$courses);
    }

    public function profile(){
       
        return view('student.profile');
    }

    public function changepass(){
        return view('student.changepass');
    }

    public function changepasspost(Request $req){
        $user = User::where('username',$req->username)->first();
        $user->password=md5($req->password);
        $user->save();

       
        return view('student.profile');

    }
}
