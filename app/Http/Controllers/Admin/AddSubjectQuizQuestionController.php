<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\SubjectQuizQuestion;
use App\Models\SubjectQuiz;
use App\Models\SubjectQuizQuestion;


class AddSubjectQuizQuestionController extends Controller
{
    public function getQuestion()
    {


        $getQuestion = SubjectQuizQuestion::all();
        return view('html/question-list')->with('lists',$getQuestion);
    }

    public function index()
    {
        
        return view('html/add-question');
    }

    public function addQuestion(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'question_name'=>'required|string|max:255',
            'status' => 'required|string',
            'level' => 'required|string',
            'question_type'=>'required|string',
            'subject_quiz_id'=>'required|number'

        ]);


        $newQuestion = new SubjectQuizQuestion();
        $newQuestion->question_name=$request->question_name;
        $newQuestion->status=$request->status;
        $newQuestion->level=$request->level;
        $newQuestion->question_type=$request->question_type;
        $newQuestion->subject_quiz_id=$request->subject_quiz_id;

        if($newQuestion->save())
        {
            return back()->with('success','question add successfully!');
        }
        else
        {
            return back()->with('fail','something error occured');
        }

    }
}
