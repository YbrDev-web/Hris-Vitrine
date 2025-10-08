@extends('layouts.layout')

@section('title', 'Nos services')

@section('content')

<!-- ✅ HERO SECTION -->
<section class="services-hero text-center py-5" style="background: linear-gradient(90deg, #00b050 0%, #009041 100%); color: white;">
    <div class="container">
        <h1 class="display-5 fw-bold">Nos services</h1>
        <p class="lead mt-3">Des solutions sur mesure pour accompagner votre transformation digitale RH.</p>
    </div>
</section>

<!-- ✅ SERVICES GRID -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Nos expertises</h2>
        <p class="text-muted">Découvrez les domaines d’intervention de HRIS PRO CONSULTING</p>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100">
                <div class="mb-3">
                    <i class="bi bi-people-fill text-success" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold">Conseil SIRH</h5>
                <p class="text-muted">
                    Diagnostic, cadrage et mise en œuvre de solutions RH adaptées à vos besoins spécifiques.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100">
                <div class="mb-3">
                    <i class="bi bi-gear-wide-connected text-success" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold">Intégration Workday</h5>
                <p class="text-muted">
                    Déploiement, paramétrage et accompagnement au changement sur la suite Workday.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100">
                <div class="mb-3">
                    <i class="bi bi-bar-chart-line-fill text-success" style="font-size: 2rem;"></i>
                </div>
                <h5 class="fw-bold">Optimisation des processus</h5>
                <p class="text-muted">
                    Audit, automatisation et amélioration continue de vos processus RH pour plus d’efficacité.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ✅ SECTEUR D’ACTIVITÉ -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Nos secteurs d’intervention</h2>
        <p class="text-muted mb-5">
            HRIS PRO CONSULTING accompagne des entreprises de tous horizons dans leur digitalisation RH.
        </p>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="p-3 border rounded bg-white shadow-sm h-100">
                    <h5 class="fw-bold text-success mb-2">Finance</h5>
                    <p class="text-muted small">Optimisation des processus RH et paie dans le secteur bancaire et financier.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 border rounded bg-white shadow-sm h-100">
                    <h5 class="fw-bold text-success mb-2">Industrie</h5>
                    <p class="text-muted small">Accompagnement des acteurs industriels dans la transformation de leurs SIRH.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 border rounded bg-white shadow-sm h-100">
                    <h5 class="fw-bold text-success mb-2">Services</h5>
                    <p class="text-muted small">Support complet aux entreprises de conseil et de prestation RH.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="p-3 border rounded bg-white shadow-sm h-100">
                    <h5 class="fw-bold text-success mb-2">Secteur public</h5>
                    <p class="text-muted small">Accompagnement des institutions publiques dans la modernisation de leurs SIRH.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ✅ CALL TO ACTION -->
<section class="text-center py-5" style="background: #0d0d0d; color: white;">
    <div class="container">
        <h2 class="fw-bold mb-3">Besoin d’un accompagnement personnalisé ?</h2>
        <p class="mb-4">Nos experts sont à votre disposition pour échanger sur vos projets Workday ou SIRH.</p>
        <a href="{{ route('contact.form') }}" class="btn btn-success px-4 py-2 fw-bold">Contactez-nous</a>
    </div>
</section>

@endsection
