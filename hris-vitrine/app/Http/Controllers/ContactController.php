<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //fonction demandant les champs requis
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
        //fonction de création de mail.
        Contact::create($validated);
        //fonction d'envoi de message par email.
        Mail::raw($validated['message'], function($mail) {
            $mail->to('ybenromdhane2003@gmail.com')
                 ->subject('Nouveau message reçu depuis le formulaire de contact');
        });
        //message de succès d'envoi de mail.
        return back()->with('success', 'Votre message a bien été envoyé !');
    }
}
