@extends('layouts.layout')

@section('title', 'Inscription')

@section('content')
<section class="container py-5">
    <h1 class="text-center mb-4">Créer un compte</h1>

    <form method="POST" action="{{ route('register.post') }}" class="col-md-6 mx-auto bg-white p-4 rounded shadow">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">Profil LinkedIn (facultatif)</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="https://www.linkedin.com/in/..." value="{{ old('linkedin') }}">
            @error('linkedin') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
            @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger w-100 py-2 mt-3">S'inscrire</button>

        <p class="text-center mt-3">
            Déjà un compte ?
            <a href="{{ route('login') }}" class="text-danger fw-bold">Se connecter</a>
        </p>
    </form>
</section>
@endsection
