<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Temporaire pour test
        return "Formulaire reçu : " . $request->input('name');
    }
}
