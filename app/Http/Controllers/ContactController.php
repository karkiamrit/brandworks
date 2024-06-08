<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('home.contact');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contact.show')
                ->withErrors($validator)
                ->withInput();
        }

        // Store the contact form data
        Contact::create($request->all());

        return redirect()->route('contact.show')->with('success', 'Your message has been sent!');
    }

    public function showAllContact()
    {
        $contacts = Contact::all();
        return view('contact.all-contact', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }
}
