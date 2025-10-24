@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<section class="container py-5">
    <h1 class="text-center mb-4">Contactez-nous</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="col-md-8 mx-auto bg-white p-4 rounded shadow">
        @csrf

        <div class="mb-3">
            <label for="full_name" class="form-label">Nom complet</label>
            <input 
                type="text" 
                name="full_name" 
                id="full_name" 
                class="form-control" 
                value="{{ old('full_name') }}" 
                required>
            @error('full_name') 
                <span class="text-danger small">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                value="{{ old('email') }}" 
                required>
            @error('email') 
                <span class="text-danger small">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="organization" class="form-label">Organisation</label>
            <input 
                type="text" 
                name="organization" 
                id="organization" 
                class="form-control" 
                value="{{ old('organization') }}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Ville</label>
            <input 
                type="text" 
                name="city" 
                id="city" 
                class="form-control" 
                value="{{ old('city') }}">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Numéro de téléphone</label>
            <input 
                type="text" 
                name="phone_number" 
                id="phone_number" 
                class="form-control" 
                value="{{ old('phone_number') }}">
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">LinkedIn</label>
            <input 
                type="text" 
                name="linkedin" 
                id="linkedin" 
                class="form-control" 
                value="{{ old('linkedin') }}">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Votre message</label>
            <textarea 
                name="message" 
                id="message" 
                rows="5" 
                class="form-control" 
                required>{{ old('message') }}</textarea>
            @error('message') 
                <span class="text-danger small">{{ $message }}</span> 
            @enderror
        </div>

        <button type="submit" class="btn btn-danger w-100 py-2 mt-3">Envoyer</button>
    </form>
</section>
@endsection
