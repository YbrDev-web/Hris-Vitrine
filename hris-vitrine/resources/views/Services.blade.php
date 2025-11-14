@extends('layouts.layout')

@section('title', 'Nos services')

@section('content')

<!-- ✅ HERO SECTION -->
<section class="services-hero text-center py-5" 
         style="background: linear-gradient(135deg, #00b8c9 0%, #007b87 100%); color: white;">
    <div class="container">
        <h1 class="display-5 fw-bold" data-translate="services_hero_title">Nos services</h1>
        <p class="lead mt-3" data-translate="services_hero_subtitle">Des solutions sur mesure pour accompagner votre transformation digitale RH.</p>
    </div>
</section>

<!-- ✅ SERVICES GRID -->
<section class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #00b8c9;" data-translate="services_expertises_title">Nos expertises</h2>
        <p class="text-muted" data-translate="services_expertises_subtitle">Découvrez les domaines d’intervention de HRIS PRO CONSULTING</p>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100 border-top border-3" style="border-color:#00b8c9;">
                <div class="mb-3">
                    <i class="bi bi-people-fill" style="font-size: 2rem; color:#00b8c9;"></i>
                </div>
                <h5 class="fw-bold text-dark" data-translate="services1_title">Conseil SIRH</h5>
                <p class="text-muted" data-translate="services1_text">
                    Diagnostic, cadrage et mise en œuvre de solutions RH adaptées à vos besoins spécifiques.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100 border-top border-3" style="border-color:#00b8c9;">
                <div class="mb-3">
                    <i class="bi bi-gear-wide-connected" style="font-size: 2rem; color:#00b8c9;"></i>
                </div>
                <h5 class="fw-bold text-dark" data-translate="services2_title">Intégration Workday</h5>
                <p class="text-muted" data-translate="services2_text">
                    Déploiement, paramétrage et accompagnement au changement sur la suite Workday.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 shadow-sm rounded bg-white h-100 border-top border-3" style="border-color:#00b8c9;">
                <div class="mb-3">
                    <i class="bi bi-bar-chart-line-fill" style="font-size: 2rem; color:#00b8c9;"></i>
                </div>
                <h5 class="fw-bold text-dark" data-translate="services3_title">Optimisation des processus</h5>
                <p class="text-muted" data-translate="services3_text">
                    Audit, automatisation et amélioration continue de vos processus RH pour plus d’efficacité.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ✅ SECTEURS D’ACTIVITÉ -->
<section class="py-5" style="background:#f9f9f9;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" style="color:#00b8c9;" data-translate="sectors_title">Nos secteurs d’intervention</h2>
        <p class="text-muted mb-5" data-translate="sectors_subtitle">
            HRIS PRO CONSULTING accompagne des entreprises de tous horizons dans leur digitalisation RH.
        </p>
        <div class="row">
            @foreach ([
                ['Finance', 'Optimisation des processus RH et paie dans le secteur bancaire et financier.'],
                ['Industrie', 'Accompagnement des acteurs industriels dans la transformation de leurs SIRH.'],
                ['Services', 'Support complet aux entreprises de conseil et de prestation RH.'],
                ['Secteur public', 'Accompagnement des institutions publiques dans la modernisation de leurs SIRH.']
            ] as [$title, $text])
                <div class="col-md-3 mb-3">
                    <div class="p-3 border rounded bg-white shadow-sm h-100">
                        <h5 class="fw-bold mb-2" style="color:#00b8c9;">{{ $title }}</h5>
                        <p class="text-muted small">{{ $text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ✅ CALL TO ACTION -->
<section class="text-center py-5" style="background: #0d0d0d; color: white;">
    <div class="container">
        <h2 class="fw-bold mb-3" data-translate="cta_title">Besoin d’un accompagnement personnalisé ?</h2>
        <p class="mb-4" data-translate="cta_text">Nos experts sont à votre disposition pour échanger sur vos projets Workday ou SIRH.</p>
        <a href="{{ route('contact.form') }}" class="btn px-4 py-2 fw-bold" 
           style="background-color:#00b8c9; color:white; border:none;" data-translate="cta_contact">
           Contactez-nous
        </a>
    </div>
</section>

@endsection
