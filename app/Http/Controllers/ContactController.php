<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $attributes = [
            'subject' => $request->subject,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('khalidlamhal0@gmail.com')->send(new ContactMail($attributes));
        return redirect()->back();
    }
}
