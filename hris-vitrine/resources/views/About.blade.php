@extends('layouts.app')

@section('title', 'À propos')

@section('content')
<section class="about-hero text-center py-5" style="background: linear-gradient(90deg, #00b050 0%, #009041 100%); color: white;">
    <div class="container">
        <h1 class="display-5 fw-bold">À propos de HRIS PRO CONSULTING</h1>
        <p class="lead mt-3">Nous accompagnons les entreprises dans la transformation digitale de leurs ressources humaines.</p>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="https://images.unsplash.com/photo-1581091215367-59ab6c4e6f03" class="img-fluid rounded shadow" alt="Équipe RHIS PRO CONSULTING">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">Notre mission</h2>
            <p>
                Chez <strong>HRIS PRO CONSULTING</strong>, nous mettons notre expertise au service de vos projets SIRH et Workday.
                Nous aidons les entreprises à optimiser la performance de leurs systèmes d'information RH
                en alliant conseil, intégration et innovation technologique.
            </p>
            <p>
                Nous intervenons depuis la phase de cadrage jusqu’au déploiement, en garantissant
                un accompagnement humain, rigoureux et orienté résultats.
            </p>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Nos valeurs</h2>
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-success fw-bold mb-2">Excellence</h4>
                <p>Nous visons la qualité et la précision dans chacune de nos interventions.</p>
            </div>
            <div class="col-md-4">
                <h4 class="text-success fw-bold mb-2">Engagement</h4>
                <p>Nous accompagnons durablement nos clients dans leurs projets RH stratégiques.</p>
            </div>
            <div class="col-md-4">
                <h4 class="text-success fw-bold mb-2">Innovation</h4>
                <p>Nous favorisons les approches modernes et les solutions performantes adaptées à vos besoins.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Notre équipe</h2>
        <p class="text-muted mb-5">
            Une équipe de consultants passionnés, experts en Workday et SIRH, alliant expertise technique et sens du service.
        </p>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3 shadow" width="120" height="120" alt="Consultant">
                <h5 class="fw-bold">Jean Dupont</h5>
                <p class="text-muted">Consultant Workday</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle mb-3 shadow" width="120" height="120" alt="Consultante">
                <h5 class="fw-bold">Sophie Martin</h5>
                <p class="text-muted">Chef de projet SIRH</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle mb-3 shadow" width="120" height="120" alt="Manager">
                <h5 class="fw-bold">Karim Lemoine</h5>
                <p class="text-muted">Directeur Conseil RH</p>
            </div>
        </div>
    </div>
</section>
@endsection
