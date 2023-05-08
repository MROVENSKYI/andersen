<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;


class ContactController extends Controller
{
    public function index(): View
    {
        return view(
            'contact',
            [
             'contacts' => Contact::all()
        ]
        );
    }

    public function create(): View
    {
        return view('contact');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);

        return redirect()->route('contacts.index')->with('success','message was delivered');
    }

}
