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

    // Page de contact
    public function contactForm()
    {
        return view('contact');
    }
    
    

    public function knowledge()
    {
        return view('Knowledge');
    }
}