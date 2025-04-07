<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactPostRequest $request){


            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->service = $request->service;
            $contact->message = $request->message;
            $contact->save();

            Mail::send('emails.contactMail',['contact' => $contact], function($message) use ($contact){
                $message->to('phonemyintthaw03@gmail.com')
                        ->subject('New Contact Form Submission');
                });
            return redirect()->route('contact')->with('success','Thank You for Contacting Us!');



    }
}
