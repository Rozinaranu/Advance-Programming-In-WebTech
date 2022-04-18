<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function Course(){
        return view('course.courses');
    }

    public function ViewDetails(){
        return view('course.details');
    }

    public function CourseList(){
        $courses = Course::all();
        return $courses;
        // return view('course.courses')->with('courses',$courses);
    }

    public function GetoneCourse($cid){
        $course =Course::where('id',$cid)->first();
        return $course;

    }

    public function purchaseCourse($cid,$uid){ 
        $course = Course::where('id',$cid)->first();
        if($course){
            $course->owner_id = $uid;
            $course->save();
            return 'purchased succesfully';
            //return redirect()->route('student.dashboard');
        }
        else{
            return 'invalid request';
        }
    }

}
