<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AddAdminController;

use App\Http\Controllers\Admin\AddCollegeController;
use App\Http\Controllers\Admin\DeleteCollegeController;


use App\Http\Controllers\Admin\DashboardController;


use App\Http\Controllers\Admin\AddCourseController;
use App\Http\Controllers\Admin\AddStudentController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\AddSubjectController;
use App\Http\Controllers\Admin\AddSubjectQuizController;
use App\Http\Controllers\Admin\AddSubjectQuizQuestionController;
use App\Http\Controllers\Admin\AddSubjectQuizAnswerController;
use App\Http\Controllers\Admin\DemoControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//working Start here...


//Admin Login And  Registration

Route::get("login",[AdminController::class,'login_page']);
Route::post('admin-login',[AdminController::class,'login']);

Route::get('register',[AdminController::class,'register_page']);
Route::post('admin-register',[AdminController::class,'register']);

//Logout Admin
route::get('admin-logout',[LogoutController::class,'index']);

//Admin  Profile

Route::get('getAdminProfile',[AddAdminController::class,"myprofile"]);


//Admin Dashboard
Route::get('dashboard',[DashboardController::class,'index']);



//ADD Default USER OR STUDENT By Admin 

Route::get('getStudentList',[AddStudentController::class,'studentList']);
Route::get('getStudent',[AddStudentController::class,'index']);
Route::post('admin-addStudent',[AddStudentController::class,'addStudent']);




//Add College
Route::get('getCollegeList',[AddCollegeController::class,'collegeList']);
Route::get('getCollege',[AddCollegeController::class,'index']);
Route::post('admin-addCollege',[AddCollegeController::class,'addCollege']);


// ADD ADMIN By admin
Route::get('getAdminList',[AddAdminController::class,'adminList']);
Route::get('getAdmin',[AddAdminController::class,'index']);
Route::post('addAdmin',[AddAdminController::class,'addAdmin']);






//ADD COURSE by admin

Route::get('getCourseList',[AddCourseController::class,'courseList']);
Route::get('getCourse',[AddCourseController::class,'index']);
Route::post('addCourse',[AddCourseController::class,'addCourse']);





//Total register student
Route::get("totalStudent",[AddStudentController::class,'registerStudentNumber']);



// ADD COLLEGE BY ADMIN
Route::get('getCollegeList',[AddCollegeController::class,'collegeList']);
Route::get('getCollege',[AddCollegeController::class,'index']);
Route::post('admin-addCollege',[AddCollegeController::class,'addCollege']);

Route::any('/admin-deleteColleges/{id?}', [DeleteCollegeController::class,'delete']);





// ADD Subject BY ADMIN


Route::get("getSubjectList",[AddSubjectController::class,'subjectList']);
Route::get("getSubject",[AddSubjectController::class,'index']);
Route::post('admin-addSubject',[AddSubjectController::class,'addSubject']);




//Add SubjectQuiz by admin


Route::get('getSubjectQuizList',[AddSubjectQuizController::class,'getSubjectQuizList']);
Route::get('getSubjectQuiz',[AddSubjectQuizController::class,'index']);
Route::post('admin-addSubjectQuiz',[AddSubjectQuizController::class,'addSubjectQuiz']);




//Add Question By Admin


Route::get('getQuestionList',[AddSubjectQuizQuestionController::class,'getQuestion']);
Route::get("getQuestion",[AddSubjectQuizQuestionController::class,'index']);
Route::post("admin-addQuestion",[AddSubjectQuizQuestionController::class,'addQuestion']);



//Add Answer By Admin

Route::get('getAnswerList',[AddSubjectQuizAnswerController::class,'getAnswer']);
Route::get("getAnswer",[AddSubjectQuizAnswerController::class,'index']);
Route::post("admin-addAnswer",[AddSubjectQuizAnswerController::class,'addAnswer']);



