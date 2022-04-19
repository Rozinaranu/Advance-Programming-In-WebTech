<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestSkillController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', [UserController::class, 'test']);

Route::get('/course-list', [CourseController::class, 'CourseList']);
Route::get('/course-list/{cid}', [CourseController::class, 'GetoneCourse']);

Route::get('/purchase-book/{cid}/{uid}', [CourseController::class, 'purchaseCourse']);
Route::post('/signup/post', [UserController::class, 'signupPost']);
Route::get('/test/{id}', [TestSkillController::class, 'Test']);
Route::get('/test/{q_id}/{answer}', [TestSkillController::class, 'Answer']);
Route::post('/signin', [UserController::class, 'signinPost']);



// User CRUD

Route::get('/users', [UserController::class, 'getAll']);
Route::get('/users/{id}', [UserController::class, 'getOne']);
Route::post('/users/', [UserController::class, 'addOne']);
Route::put('/users/', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'deleteOne']);


// Course CRUD

Route::get('/courses', [CourseController::class, 'getAll']);
Route::get('/courses/{id}', [CourseController::class, 'getOne']);
Route::post('/courses/', [CourseController::class, 'addOne']);
Route::put('/courses/', [CourseController::class, 'update']);
Route::delete('/courses/{id}', [CourseController::class, 'deleteOne']);

// Question CRUD

Route::get('/questions', [QuestionController::class, 'getAll']);
Route::get('/questions/{id}', [QuestionController::class, 'getOne']);
Route::post('/questions/', [QuestionController::class, 'addOne']);
Route::put('/questions/', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'deleteOne']);
