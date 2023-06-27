<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\College;
use App\Models\Course;

class AddStudentController extends Controller
{
    //

    
    public function studentList()
    {

        $studentlist=User::all();
       return view('html/student-list')->with('lists',$studentlist);
    }

    public function index()
    {
        return view('html/add-student');
    }

    public function addStudent(Request $request)
    {
        $validation =Validator::make($request->all(),[
            'firstname'=>"required|string",
            'lastname'=>"required|string",
            'email'=>'required|string|email|unique:users',
            'password'=>"required|string|confirmed",
            "contact"=>"required|integer|max:11|unique:users,contact",
            "alternate_contact"=>"required|integer|max:11|unique:users,alternate_contact",
            "date_of_birth"=>"required|string",
            'college_id'=>'required',
            'course_id'=>'required',
        ]);

        $newStudent = new User();
        $newStudent->firstname=$request->firstname;
        $newStudent->lastname=$request->lastname;
        $newStudent->email=$request->email;
        $newStudent->password=$request->password;
        $newStudent->contact=$request->contact;
        $newStudent->alternate_contact=$request->alternate_contact;
        $newStudent->date_of_birth=$request->date_of_birth;
        $newStudent->college_id=$request->college_id;
        $newStudent->course_id=$request->course_id;
       if($newStudent->save())
        {
            return back()->with('success','Student or User Add  successfully !');
            ;
        }
        else
        {
            return back()->with('fail','Something Want wrong ?');
        }

    }


    public function registerStudentNumber()
    {
        $student = User::all();
        $count = count($student);
        return $count;

    } 
}
