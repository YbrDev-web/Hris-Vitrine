<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Page du formulaire de contact
    public function contactForm()
    {
        return view('contact');
    }

    // Soumission du formulaire (on le développera à l'étape 4)
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
            'website' => 'max:0', // champ honeypot pour anti-spam
        ]);
    
        // Envoi d'email
        Mail::send([], [], function ($message) use ($validated) {
            $message->to('contact@hrisproconsulting.com')
                    ->subject('📩 Nouveau message du site HRIS PRO CONSULTING')
                    ->from($validated['email'], $validated['name'])
                    ->setBody(
                        "<h2>Nouveau message reçu</h2>
                         <p><strong>Nom :</strong> {$validated['name']}</p>
                         <p><strong>Email :</strong> {$validated['email']}</p>
                         <p><strong>Message :</strong><br>{$validated['message']}</p>",
                         'text/html'
                    );
        });
    
        return redirect()->back()->with('success', '✅ Votre message a bien été envoyé !');
    }
}
