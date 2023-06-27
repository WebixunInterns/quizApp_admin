<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\SubjectQuiz;

class AddSubjectQuizController extends Controller
{
    //


    public function getSubjectQuizList()
    {
        $subjectQuizList = SubjectQuiz::all();
        return view('html/subjectquiz-list')->with('lists',$subjectQuizList);
    }

    public function index()
    {
        return view("html/add-subjectquiz");
    }

    public function addSubjectQuiz(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'quiz_name' => 'required|string|max:255| unique:subject_quizzes,quiz_name',
            'subject_id' =>'required|number'
        ]);

        $newSubjectQuiz = new SubjectQuiz();
        $newSubjectQuiz->quiz_name=$request->quiz_name;
        $newSubjectQuiz->subject_id=$request->subject_id;

        if($newSubjectQuiz->save())
        {
            return back()->with('success','add SubjectQuiz successfully!');
        }
        else
        {
            return back()->with('fail','something occured error?');
        }



    }
}
