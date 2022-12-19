<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserM;
use App\Models\adminM;
use App\Models\studentM;




class PagesController extends Controller
{
    

    // api check
    public function APIList(){
        return UserM::all();
    }
    public function APIListadmin(){
        return adminM::all();
    }
    public function APIListStudent(){
        return studentM::all();
    }

    public function APIgetRegister(Request $request){ // we can also use validated form form API request, getRegister fuction in the above, we can use that also
            $usermodel = new UserM();
            $usermodel->NID= $request->nid;
            $usermodel->age= $request->age;
            $usermodel->mobile= $request->mobile;
            $usermodel->address= $request->address;
            $usermodel->save();

            return $request;
    }

    public function APIgetRegister_admin(Request $request){ // we can also use validated form form API request, getRegister fuction in the above, we can use that also
        $usermodel = new adminM();
        $usermodel->name= $request->name;
        $usermodel->phone= $request->phone;
        $usermodel->address= $request->address;
        $usermodel->save();

        return $request;
}

public function APIgetRegister_student(Request $request){ // we can also use validated form form API request, getRegister fuction in the above, we can use that also
    $usermodel = new studentM();
    $usermodel->name= $request->name;
    $usermodel->address= $request->address;
    $usermodel->save();

    return $request;
}
    
            
}


