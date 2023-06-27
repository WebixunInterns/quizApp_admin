<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Models\College;
class AddCollegeController extends Controller
{
    //

    public function collegeList()
    {
        $collegelist=College::all();
        return view('html/college-list')->with('lists',$collegelist);
    }

    public function index()
    {
        return view('html/add-college');
    }

    
    public function addCollege(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'college_name' => 'required|string|max:255|unique:college_name,colleges',
        ]);
        

        $newCollege = new College();
        $newCollege->college_name=$request->college_name;

         if($newCollege->save())
         {
            return back()->with('success','College Add Successfully !');
         }
         else
         {
            return back()->with('fails','Something Occured Error ?');
         }

    }



}
