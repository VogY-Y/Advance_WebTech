<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailTask; // have change?
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MailControllerTask extends Controller
{
    function index()
    {
     return view('Task_Mail');
    }

    function send(Request $request)
    {
        $admin="customercare@abc.com";

        $this->validate($request,
        ['firstname'=>'required',
        'lastname'=>'required', 
        'email' => 'email|required',
        'phone' => 'required',
        'message' =>  'required']
        );
        if(isset($error))
        {
    return $output;
        }
        $data = array(
            'firstname'      =>  $request->firstname,
            'lastname'      =>  $request->lastname,
            'email'      =>  $request->email,
            'phone'      =>  $request->phone,
            'message'   =>   $request->message
        );

     Mail::to($admin)->send(new SendMailTask($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
