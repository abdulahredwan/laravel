<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
        $data =request()->validate([
           'name'=>'required',
           'email'=>'required|email',
           'message'=>'required',
        ]);
        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return redirect('contact') ->with('message', 'Thanks for your  message.  Abdulahi Redwan will be in touch.');
    }

    //send email

}
