@extends('layouts.layout')

@section('title', 'Nos Partenaires')

@section('content')
<section class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-dark">Nos Partenaires</h1>
        <p class="text-muted">Nous collaborons avec des entreprises de confiance afin de garantir la réussite de nos missions RH et SIRH.</p>
    </div>

    <div class="row text-center g-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 partner-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/Logo_Oracle.svg" class="img-fluid mb-3" alt="Oracle">
                <h5 class="fw-semibold">Oracle</h5>
                <p class="text-muted small">Solutions cloud RH et ERP performantes.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 partner-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Workday_logo.svg" class="img-fluid mb-3" alt="Workday">
                <h5 class="fw-semibold">Workday</h5>
                <p class="text-muted small">Partenaire clé pour les intégrations SIRH modernes.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 partner-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/SAP_2011_logo.svg" class="img-fluid mb-3" alt="SAP">
                <h5 class="fw-semibold">SAP</h5>
                <p class="text-muted small">Optimisation des processus RH et financiers.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm p-3 partner-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/AWS_Logo.svg" class="img-fluid mb-3" alt="AWS">
                <h5 class="fw-semibold">AWS</h5>
                <p class="text-muted small">Infrastructure cloud sécurisée et scalable.</p>
            </div>
        </div>
    </div>
</section>

<style>
.partner-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
}
.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}
.partner-card img {
    max-height: 60px;
    object-fit: contain;
}
</style>
@endsection
