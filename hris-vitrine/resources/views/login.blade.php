@extends('layouts.layout')

@section('title', 'Connexion')

@section('content')
<section class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card shadow-lg border-0 p-4" style="max-width: 420px; width: 100%; border-radius: 12px;">
    <div class="text-center mb-4">
      <img src="{{ asset('favicon.ico') }}" alt="Logo HRIS PRO CONSULTING" width="80" class="mb-2">
      <h4 class="fw-bold">Connexion</h4>
      <p class="text-muted">Connectez-vous pour interagir avec nos contenus</p>
    </div>

    <!-- ✅ Boutons de connexion -->
    <div class="d-grid gap-3">
      <button class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2"
              onclick="socialLogin('LinkedIn')" style="border-color:#0A66C2;color:#0A66C2">
        <i class="bi bi-linkedin"></i> Continuer avec LinkedIn
      </button>

      <button class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2"
              onclick="socialLogin('Facebook')" style="border-color:#3b5998;color:#3b5998">
        <i class="bi bi-facebook"></i> Continuer avec Facebook
      </button>

      <button class="btn btn-outline-danger d-flex align-items-center justify-content-center gap-2"
              onclick="socialLogin('Instagram')" style="border-color:#E4405F;color:#E4405F"><a href="https://www.instagram.com/accounts/login/?next=%2Flogin%2F&source=desktop_nav"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg"
                     alt="Instagram" width="24" height="24"
                     style="filter: invert(60%) sepia(75%) saturate(500%) hue-rotate(160deg);">
        <i class="bi bi-instagram"></i> Continuer avec Instagram
      </button>
    </div>

    <div class="text-center mt-4">
      <small class="text-muted">En vous connectant, vous acceptez nos <a href="#">conditions d’utilisation</a>.</small>
    </div>
  </div>
</section>