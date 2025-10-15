@extends('layouts.layout')

@section('title', 'Knowledge & Connaissances')

@section('content')
<section class="py-5">
  <div class="container">
    <h1 class="text-center mb-5 fw-bold" style="color:#21ACC4;">Espace Knowledge</h1>

    <p class="text-center mb-5 text-muted">
      Découvrez nos articles et ressources autour du SIRH, de la transformation digitale et des solutions Workday.
    </p>

    <div class="row g-4" id="knowledge-list">

      <!-- ✅ Exemple de Card avec évaluation -->
      @foreach ([
        ['title' => 'Transformation Digitale RH', 'img' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80', 'desc' => 'Les enjeux et défis de la digitalisation RH.'],
        ['title' => 'Optimisation des Données RH', 'img' => 'https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&w=800&q=80', 'desc' => 'Comment mieux piloter la performance RH avec la data.'],
        ['title' => 'Formation & Adoption Workday', 'img' => 'https://images.unsplash.com/photo-1531497865144-0464ef8fb9a9?auto=format&fit=crop&w=800&q=80', 'desc' => 'Les bonnes pratiques pour favoriser l’adoption de Workday.'],
      ] as $index => $card)
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 knowledge-card">
          <img src="{{ $card['img'] }}" class="card-img-top" alt="{{ $card['title'] }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title text-primary fw-bold">{{ $card['title'] }}</h5>
            <p class="card-text text-muted flex-grow-1">{{ $card['desc'] }}</p>

            <!-- ⭐ Zone de notation -->
            <div class="rating mt-3 text-center" data-index="{{ $index }}">
              <span class="star" data-value="1">★</span>
              <span class="star" data-value="2">★</span>
              <span class="star" data-value="3">★</span>
              <span class="star" data-value="4">★</span>
              <span class="star" data-value="5">★</span>
              <small class="d-block text-muted mt-2">Note : <span class="average" id="avg-{{ $index }}">0.0</span> / 5</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
