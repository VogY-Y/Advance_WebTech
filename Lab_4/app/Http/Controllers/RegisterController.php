<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function getRegister(Request $request){
        $this->validate($request,
        
        [
        'name'=>'required|string|min:5',
        'Fname'=>'required|string|min:5',
        'Mname'=>'required|string|min:5',
        'nid'=>'required|integer|min:10',
        'age'=>'required|integer|min:18|max:75',
        'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11|string',
        'email'=> 'required|regex:/^\\S+@\\S+\\.\\S+$/',
        'password'=> 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
        'address'=>'required|min:10|string',
        
        ],
        [
            'required'=>'Please fill up the field',
            'string'=>'Values must be string',
            'integer'=>'Values must be integer',
            'password.regex'=>'Has minimum 8 characters in length,At least one uppercase English letter,At least one lowercase English letter,At least one digit,At least one special character,',

        ]
        );      
        $output=$request->name;
        $output.=$request->Fname;
        $output.=$request->Mname;
        $output.=$request->nid;
        $output.=$request->age;
        $output.=$request->mobile;
        $output.=$request->email;
        $output.=$request->password;
        $output.=$request->address;
        
        return $output;;
}
        //return view('register',['name'=>$name,'age'=>'','email'=>'acb@gmail.com']);

}
