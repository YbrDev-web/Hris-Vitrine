<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Contact::create($validated);

        Mail::to('ybenromdhane2003@gmail.com')->send(new ContactMail($validated));
        
        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}
