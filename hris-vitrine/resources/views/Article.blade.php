@extends('layouts.layout')

@section('title', 'Articles')

@section('content')
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold" style="color:#21ACC4;">Articles</h1>
      <!-- Bouton pour ouvrir le modal -->
      <button class="btn" style="background-color: #187B8C; color: white;"
              data-bs-toggle="modal" data-bs-target="#addFeedModal">
        + Ajouter flux RSS
      </button>
    </div>

    <p class="text-center mb-5 text-muted">
      Découvrez les derniers articles sur le domaine SIRH.
    </p>

    <!-- Affichage messages flash -->
    @if(session('success'))
      <div class="alert alert-success text-center">{{ session('success') }}</div>
    @elseif(session('error'))
      <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <div class="row g-4">
      @forelse ($articles as $article)
        <div class="col-md-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="fw-bold" style="color:#21ACC4;">{{ $article['title'] }}</h5>
              <small class="text-muted mb-2">{{ $article['source'] }} • {{ $article['date'] }}</small>
              <p class="text-muted flex-grow-1">{{ Str::limit($article['description'], 120) }}</p>
              <a href="{{ $article['link'] }}" target="_blank" class="btn btn-outline-info mt-2">Lire l'article</a>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-muted">Aucun article trouvé pour le moment.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- ================== MODAL AJOUT FLUX RSS ================== -->
<div class="modal fade" id="addFeedModal" tabindex="-1" aria-labelledby="addFeedModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #21ACC4; color: white;">
        <h5 class="modal-title" id="addFeedModalLabel">Ajouter un flux RSS</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>

      <!-- Formulaire pour ajouter un flux RSS -->
      <form method="POST" action="{{ route('feeds.store') }}">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="feed_name" class="form-label">Nom du flux</label>
            <input type="text" name="feed_name" id="feed_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="feed_url" class="form-label">URL du flux RSS</label>
            <input type="url" name="feed_url" id="feed_url" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn" style="background-color: #21ACC4; color: white;">Ajouter</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
