<?php

namespace App\Http\Controllers;

use App\Mail\Send;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendEmail(Request $req){
        $req -> validate([
            'name' => 'required | min:2',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $name = $req['name'];
        $email = $req['email'];
        $subject = $req['subject'];
        $message = $req['message'];
       
        Mail::to('sli@jlisbz.com')->send(new Send($name, $email, $subject, $message));
        return redirect('/')->with('message', 'Successfully sent!');
    }
}
