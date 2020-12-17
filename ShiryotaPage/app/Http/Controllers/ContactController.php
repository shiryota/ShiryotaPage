<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendContactMail;
use Mail;

class ContactController extends Controller
{
    public function post(Request $request)
    {
        $to = [
            [
                'email' => 'shiryo19950420@gmail.com',
                'name' => 'Test'
            ]
        ];
        Mail::to($to)->send(new SendContactMail($request));
        return view('Contact');
    }
}
