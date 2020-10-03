<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function index() {
        return view('index');
    }

    function send(Request $request) {


//        $this->validate($request, [
//            'name'      =>  'required',
//            'tel'       =>  'required|regex:/(01)[0-9]{9}/',
//            'message'   =>  'required'
//        ]);

        $data = array(

            'name'      => $request->name,
            'tel'       => $request->tel,
            'message'   => $request->message,
            'page'      => $request->type
        );

        Mail::to('prorab70ru@yandex.ru')->send(new SendMail($data));
        return view('thank-you');


    }
}
