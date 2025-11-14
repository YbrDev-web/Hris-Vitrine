<!-- ================== Page Article terminée ================== -->
@extends('layouts.layout')

@section('title', 'Articles')

@section('content')
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fw-bold" style="color:#21ACC4;" data-translate="articles_title">Articles</h1>
      <!-- Bouton pour ouvrir le modal -->
      <button class="btn" style="background-color: #187B8C; color: white;"
              data-bs-toggle="modal" data-bs-target="#addFeedModal" data-translate="add_rss_button">
        + Ajouter flux RSS
      </button>
    </div>

    <p class="text-center mb-5 text-muted" data-translate="articles_subtitle">
      Découvrez les derniers articles sur le domaine SIRH.
    </p>

    
    <!-- Affichage messages flash -->
    @if(session('success'))
      <div class="alert alert-success text-center" data-translate="flash_success">{{ session('success') }}</div>
    @elseif(session('error'))
      <div class="alert alert-danger text-center" data-translate="flash_error">{{ session('error') }}</div>
    @endif

    <div class="row g-4">
      @forelse ($articles as $article)
        <div class="col-md-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex flex-column">
              <h5 class="fw-bold" style="color:#21ACC4;">{{ $article['title'] }}</h5>
              <small class="text-muted mb-2">{{ $article['source'] }} • {{ $article['date'] }}</small>
              <p class="text-muted flex-grow-1">{{ Str::limit($article['description'], 120) }}</p>
              <a href="{{ $article['link'] }}" target="_blank" class="btn btn-outline-info mt-2" data-translate="article_read">Lire l'article</a>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-muted" data-translate="article_empty">Aucun article trouvé pour le moment.</p>
      @endforelse
    </div>  
  </div>
</section>



<!-- ================== MODAL AJOUT FLUX RSS ================== -->
@endsection
