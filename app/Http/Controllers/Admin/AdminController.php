<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Validator;
use Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = ['message' => 'admin index'];
        return response($response, 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $response = ['message' => 'update function'];
        return response($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function boot(string $id)
    {
        Schema::defaultStringLength(191);
    }


    public function register_page()
    {
        return view('html/authentication-register');
    }


    public function  register(Request $request)
    {

        $validation = Validator::make($request->all(),[
            'admin_name' => 'required|string|max:255',
            'email' => 'required |string|email|max:255|unique:admins',
            'password'=>'required|string',
            'contact'=>'required|number|min:8',
            'college_id'=>'required|number'
        ]);


        $newAdmin = new Admin();
        $newAdmin->admin_name=$request->admin_name;
        $newAdmin->email=$request->email;
        $newAdmin->password=$request->password;
        $newAdmin->contact=$request->contact;
        $newAdmin->college_id=$request->college_id;

        if($newAdmin->save())
        {
            return redirect('login')->with('success','Registered successfully !');
        }
        else{
            return back()->with('fail','something occured wrong');
        }

    }
    

    public function login_page()
    {
        return view('html/authentication-login');
    }


    public function login(Request $request)
    {

      
      $validation = Validator::make($request->all(),[
        'email'=>'required|email|unique:admins',
        'password'=>'required',
      ]);

       $admin = Admin::where('email','=',$request->email)->first();
       
       if($admin)
        {
            if(Hash::check($request->password,$admin->password)){
              
                return redirect('dashboard');
            }
            else
            {
                return back()->with('fail','Password Not Matched ');
               
            }
        }
        else
        {
            return back()->with('fail','This email is not registered ?');
            
        }
    }
    
   

}
