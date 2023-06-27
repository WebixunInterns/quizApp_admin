<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Subject;

class AddSubjectController extends Controller
{
    //

    public function subjectList()
    {
        $subjectList = Subject::all();
        return view('html/subject-list')->with('lists',$subjectList);
    }

    public function index()
    {
        return view('html/add-subject');
    }

    public function addSubject(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'subject_name'=>'required|string|unique:subjects,subject_name',
            'course_id' => 'required|number'
        ]);

        $newSubject = new Subject();
        $newSubject->subject_name=$request->subject_name;
        $newSubject->course_id=$request->course_id;
        if($newSubject->save())
        {
            return back()->with('success','add Successfully !');
        }
        else
        {
            return back()->with('fail','something occured Error !');
        }
    }
}
