@extends('layouts.layout')

@section('title', 'Connexion')

@section('content')
<section class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
  <div class="card shadow-lg border-0 p-4" style="max-width: 420px; width: 100%; border-radius: 12px;">
    <div class="text-center mb-4">
      <img src="{{ asset('images/logoHRIS.png') }}" alt="Logo HRIS PRO CONSULTING" width="80" class="mb-2">
      <h4 class="fw-bold">Connexion</h4>
      <p class="text-muted">Connectez-vous pour accéder à votre espace</p>
    </div>

    @if($errors->any())
      <div class="alert alert-danger text-center">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Adresse email</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label" for="remember">Rester connecté</label>
      </div>

      <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>
  </div>
</section>
@endsection
