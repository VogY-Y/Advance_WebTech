<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;

class UpdateController extends Controller
{
    //

    function getUpdate(Request $request){
        $this->validate($request,
        
        [
        'nid'=>'required|digits:10',
        'age'=>'required|integer|min:18|max:75',
        'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11',
        'address'=>'required'
        
        ]
        );

        $up = UserM::where('ID' , $request->id)->first();

        if (isset($error)){
            $output=$request->nid ."<br><br>";
            $output.=$request->age ."<br><br>";
            $output.=$request->mobile."<br><br>";
            $output.=$request->blood_group."<br><br>";
            $output.=$request->address."<br><br>";
            
            return $output;

        }
        else{
            
            if($up){

                $up->NID= $request->nid;
                $up->age= $request->age;
                $up->mobile= $request->mobile;
                $up->address= $request->address;
                $up->save();

                // update session values

                session()->put("nid",$request->nid);
                session()->put("age",$request->age);
                session()->put("mobile",$request->mobile);
                session()->put("address",$request->address);
                    

                return redirect('/profile');
                //echo '<script>alert("Update Succesfully")</script>';

            }
            else{
                echo '<script>alert("Update UnSuccesfully")</script>';
            }
            
            
            //return redirect('profile');

            // UserM::update('customer')
            // ->where('ID', $request->id)
            // ->update(['NID' => $request->nid],['age' => $request->age],['mobile' => $request->mobile],['address' => $request->address]);

            //UserM::update('update student set age = ? where id = ?',[$request->age,$request->id]);

            // echo '<script>alert("Update Succesfully")</script>';
            // //return view('profile');
            // $output=$request->nid ."<br><br>";
            // $output.=$request->age ."<br><br>";
            // $output.=$request->mobile."<br><br>";
            // $output.=$request->address."<br><br>";
            
            // return $output;


        }

        

    } 
}
