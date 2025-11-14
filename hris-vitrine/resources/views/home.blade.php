@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
<section class="hero">
    <div id="particles-js"></div>
    <div class="hero-content">
        <h1 data-translate="hero_title">Votre partenaire SIRH & Workday</h1>
        <p data-translate="hero_subtitle">HRIS PRO CONSULTING accompagne les entreprises dans l’optimisation de leurs systèmes RH.</p>
        <a href="{{ route('contact.form') }}" class="btn-main mt-3" data-translate="contact_us">Contactez-nous</a>
</section>

<section class="container my-5 text-center">
    <h2 class="mb-4" data-translate="expertises_title"
    >Nos expertises</h2>
    <div class="row">
        <div class="col-md-4">
            <h4 data-translate="expertise1_title">Conseil SIRH</h4>
            <p data-translate="expertise1_text">Analyse, cadrage et mise en œuvre de solutions RH adaptées à votre organisation.</p>
            <a href="{{ route('about') }}" class="btn-main mt-3"  data-translate="about">À propos</a>
        </div>
        <div class="col-md-4">
            <h4 data-translate="expertise2_title">Intégration Workday</h4>
            <p data-translate="expertise2_text">Déploiement, configuration et accompagnement au changement pour vos équipes.</p>
            <a href="{{ route('knowledge') }}" class="btn-main mt-3" data-translate="knowledge">Knowledge</a>
        </div>
        <div class="col-md-4">
            <h4 data-translate="expertise3_title">Optimisation des processus</h4>
            <p data-translate="expertise3_text">Audit et amélioration continue de vos processus RH pour une performance durable.</p>
            <a href="{{ route('services') }}" class="btn-main mt-3" data-translate="services">Services</a>
        </div>
    </div>
</section>

