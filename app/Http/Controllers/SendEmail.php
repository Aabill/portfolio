<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class SendEmail extends Controller
{
    //
    public function send(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:15'
        ]);

        $data = [];
        $data = $request->all();
        /* return $data; */


       Mail::to('domingoaaronbill@gmail.com')->send(new SendMailable($data));

        Session::flash('success',"Your email has been sent. Thank you.");
        return redirect('/');
    }
}
