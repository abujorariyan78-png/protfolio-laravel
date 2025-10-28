<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactPageController extends Controller
{
      public function sotr(){
        $contact_form_data=  request()->all();
        Mail::to('mdabujorgifari046@gmail.com')->send(new ContactFormMail($contact_form_data));
      }
}
