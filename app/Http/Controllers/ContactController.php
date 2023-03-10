<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
   public function sendMessage(ContactRequest $request){
    Mail::to('endaweke1234@gmail.com')->send(new ContactMail($request->name,$request->email,$request->body));

    return redirect()->back();
   }
}
