<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Course;
use App\Models\College;
use Session;

class AddCourseController extends Controller
{
    //

    public function courseList()
    {   
         
        $courselist = Course::all();
        return view("/html/courses-list")->with('lists',$courselist);
    }

    public function index()
    {
        return view("/html/add-course");
    }
   

    public function addCourse(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'course_name'=>'required|string|unique:coursess,course_name',
            'college_id' => 'required|integer'
       ]);

       
       $newCourse = new Course();
       $newCourse->course_name=$request->course_name;
       $newCourse->college_id=$request->college_id;

        if($newCourse->save())
        {
           return back()->with('success','Course Add Successfully !');
        }
        else
        {
           return back()->with('fails','Something Occured Error ?');
        }
    }
   
}
