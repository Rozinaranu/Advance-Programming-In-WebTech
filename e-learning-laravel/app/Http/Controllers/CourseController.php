<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function Course()
    {
        return view('course.courses');
    }

    public function ViewDetails()
    {
        return view('course.details');
    }

    public function CourseList()
    {
        $courses = Course::all();
        return $courses;
        // return view('course.courses')->with('courses',$courses);
    }

    public function GetoneCourse($cid)
    {
        $course = Course::where('id', $cid)->first();
        return $course;
    }

    public function purchaseCourse($cid, $uid)
    {
        $course = Course::where('id', $cid)->first();
        if ($course) {
            $course->owner_id = $uid;
            $course->save();
            return 'purchased succesfully';
            //return redirect()->route('student.dashboard');
        } else {
            return 'invalid request';
        }
    }


    public function getAll()
    {
        return Course::all();
    }

    public function getOne($id)
    {
        return Course::where('id', $id)->first();
    }

    public function addOne(Request $req)
    {
        $course = new Course();
        $course->name = $req->name;
        $course->instructor_id = $req->instructor_id;
        $course->owner_id = $req->owner_id;
        $course->is_on_sale = false;
        $course->save();
        return $course;
    }

    public function update(Request $req)
    {
        $course = Course::where('id', $req->id)->first();
        if (!$course) return "Course not found";
        $course->name = $req->name;
        $course->instructor_id = $req->instructor_id;
        $course->owner_id = $req->owner_id;
        $course->is_on_sale = $req->is_on_sale;
        $course->save();
        return $course;
    }

    public function deleteOne($id)
    {
        Course::where('id', $id)->delete();
        return "Deleted";
    }
}
