<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[UserController::class,'test']);

Route::post('/signup/post',[UserController::class,'signupPost'])->name('signup.post');
Route::get('/signup',[UserController::class,'signup'])->name('signup');

Route::get('/signin',[UserController::class,'signin'])->name('signin');
Route::post('/signin/post',[UserController::class,'signinPost'])->name('signin.post');

Route::get('/student/dashboard',[StudentController::class,'dashboard'])->name('student.dashboard');
Route::get('/student/profile',[StudentController::class,'profile'])->name('student.profile');
Route::post('/student/changepass/post',[StudentController::class,'changepasspost'])->name('student.changepass.post');
Route::get('/student/changepass',[StudentController::class,'changepass'])->name('student.changepass');
Route::get('/instructor/dashboard',[InstructorController::class,'dashboard'])->name('instructor.dashboard');
Route::get('/course/courses',[CourseController::class,'Course'])->name('course.courses');
Route::get('/course/list',[CourseController::class,'CourseList'])->name('course.list');
//my addition
Route::get('/course/details',[CourseController::class,'ViewDetails'])->name('course.details');

Route::get('/course/purchase/{cid}/{uid}',[CourseController::class,'purchaseCourse'])->name('course.purchase');