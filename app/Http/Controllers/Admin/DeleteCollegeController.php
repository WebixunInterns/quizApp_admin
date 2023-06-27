<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;

class DeleteCollegeController extends Controller
{
    //

    public function delete (Request $request)
    {       
     
        $id=$request->id;
        return $id;
        $college = College::find($id);

        if (!$college) {
            // return response()->json(['message' => 'College not found'], 404);
            return back()->with('message','College not found');
        }

        $college->delete();

        // return response()->json(['message' => 'College deleted successfully']);
        return back()->with('message' , 'College deleted successfully');
    }
}
