@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
<section class="hero">
    <h1>Votre partenaire SIRH & Workday</h1>
    <p>HRIS PRO CONSULTING accompagne les entreprises dans l’optimisation de leurs systèmes RH.</p>
    <a href="{{ route('contact.form') }}" class="btn-main mt-3">Contactez-nous</a>
</section>

<section class="container my-5 text-center">
    <h2 class="mb-4">Nos expertises</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>Conseil SIRH</h4>
            <p>Analyse, cadrage et mise en œuvre de solutions RH adaptées à votre organisation.</p>
            <a href="{{ route('about') }}" class="btn-main mt-3">À propos</a>
        </div>
        <div class="col-md-4">
            <h4>Intégration Workday</h4>
            <p>Déploiement, configuration et accompagnement au changement pour vos équipes.</p>
            <a href="{{ route('contact.form') }}" class="btn-main mt-3">Contactez-nous</a>
        </div>
        <div class="col-md-4">
            <h4>Optimisation des processus</h4>
            <p>Audit et amélioration continue de vos processus RH pour une performance durable.</p>
            <a href="{{ route('contact.form') }}" class="btn-main mt-3">Contactez-nous</a>
        </div>
    </div>
</section>

