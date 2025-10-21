@extends('layouts.layout')

@section('title', 'À propos')

@section('content')

<!-- 🌟 HERO SECTION -->
<section class="about-hero text-center py-5" style="background: linear-gradient(135deg, #187B8C, #21ACC4); color: white;">
    <div class="container">
        <h1 class="display-5 fw-bold">À propos de HRIS PRO CONSULTING</h1>
        <p class="lead mt-3">
            Nous accompagnons les entreprises dans la transformation digitale de leurs ressources humaines grâce à notre expertise Workday & SIRH.
        </p>
    </div>
</section>

<!-- 💼 SECTION MISSION -->
<section class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0 text-center">
            <img src="{{ asset('images/logoHRIS.png') }}" class="img-fluid rounded shadow-sm p-3" alt="HRIS PRO CONSULTING Logo" style="max-width: 280px;">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-3 text-primary">Notre mission</h2>
            <p class="text-muted">
                Chez <strong>HRIS PRO CONSULTING</strong>, nous mettons notre savoir-faire au service des directions RH souhaitant moderniser leurs processus à travers des solutions digitales performantes.
            </p>
            <p class="text-muted">
                Nous accompagnons nos clients à chaque étape de leur projet SIRH — du cadrage à l’intégration — en veillant à la qualité, la simplicité d’usage et l’efficacité opérationnelle.
            </p>
            <a href="{{ url('/contact') }}" class="btn btn-outline-info mt-3">Nous contacter</a>
        </div>
    </div>
</section>

<!-- 💚 NOS VALEURS -->
<section class="bg-light py-5 border-top border-bottom">
    <div class="container text-center">
        <h2 class="fw-bold mb-4 text-primary">Nos valeurs</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="fw-bold text-info mb-2">Excellence</h4>
                    <p class="text-muted">Nous visons la qualité, la rigueur et la satisfaction dans chaque mission.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="fw-bold text-info mb-2">Engagement</h4>
                    <p class="text-muted">Nos consultants s’impliquent pleinement pour garantir la réussite de vos projets RH.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="fw-bold text-info mb-2">Innovation</h4>
                    <p class="text-muted">Nous favorisons les approches modernes et les technologies de pointe adaptées à vos besoins.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 👥 NOTRE ÉQUIPE -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4 text-primary">Notre équipe</h2>
        <p class="text-muted mb-5">
            Une équipe d’experts Workday et SIRH, unis par la passion du conseil et de la performance RH.
        </p>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="team-card p-4 bg-white rounded shadow-sm">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Consultant">
                    <h5 class="fw-bold text-dark">Jean Dupont</h5>
                    <p class="text-muted mb-0">Consultant Workday</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card p-4 bg-white rounded shadow-sm">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Consultante">
                    <h5 class="fw-bold text-dark">Sophie Martin</h5>
                    <p class="text-muted mb-0">Cheffe de projet SIRH</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="team-card p-4 bg-white rounded shadow-sm">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle mb-3 shadow-sm" width="120" height="120" alt="Manager">
                    <h5 class="fw-bold text-dark">Karim Lemoine</h5>
                    <p class="text-muted mb-0">Directeur Conseil RH</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
