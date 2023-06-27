<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{


    public function index()
    {
        return view('html/authentication-login');
    //     if(Session::has('loginId')){
    //         Session::pull('loginId');
    //         return view('html/authentication-login');
    //     }
    }
    
}
