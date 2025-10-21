@extends('layouts.layout')

@section('title', 'Connexion')

@section('content')
<section class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card shadow-lg border-0 p-4" style="max-width: 420px; width: 100%; border-radius: 12px;">
    <div class="text-center mb-4">
      <img src="images/logoHRIS.png" alt="Logo HRIS PRO CONSULTING" width="80" class="mb-2">
      <h4 class="fw-bold">Connexion</h4>
      <p class="text-muted">Connectez-vous pour interagir avec nos contenus</p>
    </div>

    <!-- ✅ Boutons de connexion -->
    <div class="d-grid gap-3">
        <button onclick="openLinkedInPopup()" class="btn btn-outline-primary w-100 mb-3"><a href="https://www.linkedin.com/login" target="_blank" aria-label="LinkedIn" class="mx-2">
            Continuer avec LinkedIn
        </button>
        <button onclick="openLinkedInPopup()" class="btn btn-outline-primary w-100 mb-3">
            Continuer avec Google
        </button>
        <button onclick="openLinkedInPopup()" class="btn btn-outline-primary w-100 mb-3">
            Continuer avec Microsoft
        </button>
    </div>
  </div>
</section>