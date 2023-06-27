<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Session;

class AddAdminController extends Controller
{
    //
    public function index()
    {
        return view('html/add-admin');
    }



    public function addAdmin(Request $request)
    {
        $validation =Validator::make($request->all(),[
            'admin_name'=>"required|string",
            'email'=>'required|string|email|unique:admins',
            'password'=>"required|string|confirmed",
            "contact"=>"required|integer|max:10",
            'college_id'=>'required',
        ]);

        $newAdmin = new Admin();
        $newAdmin->admin_name=$request->admin_name;
        $newAdmin->email=$request->email;
        $newAdmin->password=$request->password;
        $newAdmin->contact=$request->contact;
        $newAdmin->college_id=$request->college_id;
       if($newAdmin->save())
        {
            return back()->with('success','you have registered successfully !');
            
        }
        else
        {
            return back()->with('fail','Something Want wrong ?');
        }

    }


    public function adminList()
    {
        $adminlist = Admin::all();
        return view("/html/admin-list")->with('lists',$adminlist);
    }


    //  it not working properly
    public function myprofile()
    {
        $adminId = Auth::admin();
        $data = Admin::where('id','=',$adminId)->first();
        return view('html/admin-profile')->with('data',$data);

        
    }
 



}
