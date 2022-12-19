<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserM;

class LoginController extends Controller
{
    //
    function checklogin(Request $request){
        $usermodel1 = new UserM();
        $logininfo = $usermodel1->where('NID',$request->nid)->where('mobile',$request->mobile)->first();
        
        if (!empty($request->nid && $request->mobile)){
            if(isset($logininfo)){

                $temp = UserM::count();
    
                //return redirect('/profile')->with('t',$temp);
                //return view('profile')->with('t',$temp);
                //return redirect('/profile')->with('logininfo',$logininfo);
            
                //return view("/profile")->with('loginfo',$logininfo);
                //return redirect('/profile')->with('loginfo',$logininfo);
                //return $logininfo;
    
                //session()->put("info",$logininfo);
    
                session()->put("id",$logininfo->ID);
                session()->put("nid",$logininfo->NID);
                session()->put("age",$logininfo->age);
                session()->put("mobile",$logininfo->mobile);
                session()->put("address",$logininfo->address);
                
                return redirect('/profile');
    
    
                
            }
            else{
                $output ="Wrong Info";
                return $output;
            }
        }else{
            echo '<script>alert("plase enter value")</script>';
            header('Location: '.$_SERVER['PHP_SELF']);
            die;
        }

        }
       


    function profiledir(){
        return view('profile');
    }

    function logoutOp(){
        
        session()->flush();
        return redirect('/login');
    }

}


