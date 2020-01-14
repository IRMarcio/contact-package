<?php

namespace Stinger\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stinger\Contact\Mail\ContactMailable;
use Stinger\Contact\Models\Contact;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));

        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
