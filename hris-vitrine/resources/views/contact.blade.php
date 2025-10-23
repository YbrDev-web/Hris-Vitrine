@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<section class="container py-5">
    <h1 class="text-center mb-4">Contactez-nous</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <div>
        <label>Nom complet</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}" required>
        @error('full_name') <span>{{ $message }}</span> @enderror
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <span>{{ $message }}</span> @enderror
    </div>

    <div>
        <label>Organisation</label>
        <input type="text" name="organization" value="{{ old('organization') }}">
    </div>

    <div>
        <label>Ville</label>
        <input type="text" name="city" value="{{ old('city') }}">
    </div>

    <div>
        <label>Téléphone</label>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}">
    </div>

    <div>
        <label>Message</label>
        <textarea name="message" required>{{ old('message') }}</textarea>
        @error('message') <span>{{ $message }}</span> @enderror
    </div>

    <button type="submit">Envoyer</button>
</form>

@endsection
