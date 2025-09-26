@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<section class="container py-5">
    <h1 class="text-center mb-4">Contactez-nous</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" class="col-md-8 mx-auto bg-white p-4 rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
        </div>

        <input type="text" name="website" style="display:none">

        <button type="submit" class="btn btn-success w-100">Envoyer</button>
    </form>
</section>
@endsection
