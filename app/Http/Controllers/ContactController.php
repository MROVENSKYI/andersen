<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;



class ContactController extends Controller{

    public function submit(ContactRequest $req) {
       $contact = new Contact();
       $contact->name = $req->input('name');
       $contact->email = $req->input('email');
       $contact->message = $req->input('message');

       $contact->save();

       return redirect()->route('contact')->with('success','message was delivered');

    }

    public function allData() {
        return view('contact',['data' => Contact::all()]);
    }

}

