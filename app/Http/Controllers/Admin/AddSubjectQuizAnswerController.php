<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\SubjectQuizAnswer;
class AddSubjectQuizAnswerController extends Controller
{
    //

    public function getAnswer()
    {
        $getAnswer=SubjectQuizAnswer::all();
        return view('html/answer-list')->with('lists',$getAnswer);
    }

    public function index()
    {
        return view('/html/add-answer');
    }

    public function addAnswer(Request $request)
    {
        
        $validation = Validator::make($request->all(),[
            'option1' => 'required|string',
            'option2' => 'required|string',
            'option3' => 'required|string',
            'option4' => 'required|string',
            'correct_answer' => 'required|string',
            'question_id' => 'required|number',
            'subject_quiz_id' => 'required|number',
        ]);


        $newAnswer = new SubjectQuizAnswer();
        $newAnswer->option1=$request->option1;
        $newAnswer->option2=$request->option2;
        $newAnswer->option3=$request->option3;
        $newAnswer->option4=$request->option4;
        $newAnswer->correct_answer=$request->correct_answer;
        $newAnswer->question_id=$request->question_id;
        $newAnswer->subject_quiz_id=$request->subject_quiz_id;

        if($newAnswer->save())
        {
            return back()->with('success','add answer successfully!');
        }
        else
        {
            return back()->with('fail','Something Occured Error?');
        }
    }

}
