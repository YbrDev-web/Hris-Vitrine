@extends('layouts.layout')

@section('title', 'Knowledge')

@section('content')
<section class="py-5">
  <div class="container">
    <h1 class="text-center mb-5 fw-bold" style="color:#21ACC4;">Base de Connaissances</h1>

    <p class="text-center mb-5 text-muted">
      Découvrez nos articles et ressources autour du SIRH, de la transformation digitale et des solutions Workday.
    </p>

    <div class="row g-4" id="knowledge-list">
      @foreach ([
        ['title' => 'Transformation Digitale RH', 'img' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80', 'desc' => 'Les enjeux et défis de la digitalisation RH.'],
        ['title' => 'Optimisation des Données RH', 'img' => 'https://images.unsplash.com/photo-1556155092-8707de31f9c4?auto=format&fit=crop&w=800&q=80', 'desc' => 'Comment mieux piloter la performance RH avec la data.'],
        ['title' => 'Formation & Adoption Workday', 'img' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80', 'desc' => 'Les bonnes pratiques pour favoriser l’adoption de Workday.'],
      ] as $card)
        <div class="col-md-4">
          <div class="card shadow-sm border-0 h-100 knowledge-card">
            <img src="{{ $card['img'] }}" class="card-img-top" alt="{{ $card['title'] }}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-primary fw-bold">{{ $card['title'] }}</h5>
              <p class="card-text text-muted flex-grow-1">{{ $card['desc'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ✅ STYLE -->

@endsection
