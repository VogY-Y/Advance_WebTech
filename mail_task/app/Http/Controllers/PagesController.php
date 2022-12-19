<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserM;
use App\Models\adminM;
use App\Models\studentM;


/*
class Person{
    var $name;
    var $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

    }
}
*/

class PagesController extends Controller
{
    //  value pass by Associative Array
    
    /*
    function Hello(){
        $name = "Pankaj";
        $profession = "Student";
        $address = "Dhaka";

        return view("test",
        [
            "nm"=>$name, // here nm is variable, by this show the data in the test.balde.php page
            "prof"=>$profession,
            "address"=>$address
        ]);
    }

    */

    /*
    //  value pass by Associative Array
    function Hello2(){
        $name1 = "Das";
        $profession1 = "SE";
        $address1 = "Khulna";

        return view("test")
        ->with("nm1", $name1)
        ->with("prof2", $profession1)
        ->with("address2", $address1);
    }
    */

    /*
    function Hello3(){
        $ages = ["Rahim"=>30,"Pankaj"=>2,"Salam"=>50,"Karim"=>16];
        return view('test')
        ->with('ages',$ages);
    }
    */


    /*
    // pass object

    function Hello4(){
        $p1 = new Person("pankaj", 45);
        $p2 = new Person("kumar", 17);
        $p3 = new Person("Das", 15);

        $persons = array($p1, $p2, $p3);

        return view('test')->with('persons', $persons);

    }
    */

    // passing value from view to controller

    function registration(){
        return view('registration');
    }

    /*

    function register(Request $request){
        $output = "<h1 align = 'center'>Submitted</h1><br><br>";
        $output.="Name : ".$request->tittle. " ". $request->s_name. "<br><br>";
        $output.="Father Name : ".$request->f_name."<br><br>";
        $output.="Mother Name : ".$request->m_name."<br><br>";
        $output.="DOB : ".$request->dob."<br><br>";
        $output.="Address : ".$request->address."<br><br>";


        if (isset($error)){

        }
        else{

        }

        return $output;

    }   */


    
    // data insert in the database

    // validation

    function getRegister(Request $request){
        $this->validate($request,
        
        [
        'nid'=>'required|digits:10',
        'age'=>'required|integer|min:18|max:75',
        'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:11',
        'address'=>'required'
        
        ]
        );
        
       

        if (isset($error)){
            $output=$request->nid ."<br><br>";
            $output.=$request->age ."<br><br>";
            $output.=$request->mobile."<br><br>";
            $output.=$request->address."<br><br>";
            
            return $output;

        }
        else{
            $usermodel = new UserM();
            $usermodel->NID= $request->nid;
            $usermodel->age= $request->age;
            $usermodel->mobile= $request->mobile;
            $usermodel->address= $request->address;
            $usermodel->save();

            // use alert box and go to another by JS
           return  '<script type=\'text/javascript\'>alert("Submission Succesfully"); window.location="/login"</script>';
           // return view('/login');


        }

        

    } 

    function admin_check(){
        $all_admin_data = UserM::all();
        return view("admin_test")->with("all_admin_data",$all_admin_data);

    }


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

            //return $request;
            return  '<script type=\'text/javascript\'>alert("Submission Succesfully"); window.location="/aptP"</script>';
    }
    
            
}


