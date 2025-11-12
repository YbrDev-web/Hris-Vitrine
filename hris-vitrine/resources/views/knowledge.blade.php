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
      ] as $index => $card)
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 knowledge-card">
          <img src="{{ $card['img'] }}" class="card-img-top" alt="{{ $card['title'] }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title text-primary fw-bold">{{ $card['title'] }}</h5>
            <p class="card-text text-muted flex-grow-1">{{ $card['desc'] }}</p>

            <!-- ⭐ Système de notation -->
            <div class="rating mt-3 text-center" data-card-id="{{ $index }}">
              <!-- <div class="stars" role="radiogroup" aria-label="Évaluation de cette carte">
                @for ($i = 1; $i <= 5; $i++)
                  <button class="star" data-value="{{ $i }}" aria-label="{{ $i }} étoile sur 5">★</button>
                @endfor
              </div>
              <small class="d-block text-muted mt-2">
                Note moyenne : <span class="average" id="avg-{{ $index }}">0.0</span> / 5
              </small> -->
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <a href="{{ route('articles') }}" class="btn btn-outline-info"> découvrez + d'Articles</button>
      <a href="{{ route('articles') }}" class="btn btn-outline-info">
        S'abonner au flux RSS
      </a>


    </div>
  </div>
</section>

<!-- ✅ STYLE -->
<style>

</style>

<!-- ✅ SCRIPT -->
<script>
// document.addEventListener('DOMContentLoaded', function() {
//   const ratings = {};

//   document.querySelectorAll('.rating').forEach(ratingDiv => {
//     const index = ratingDiv.dataset.index;
//     const stars = ratingDiv.querySelectorAll('.star');
//     const avgDisplay = document.getElementById('avg-' + index);

//     let total = 0;
//     let count = 0;

//     stars.forEach(star => {
//       star.addEventListener('click', () => {
//         const value = parseInt(star.dataset.value);

//         // Simulation d'une base de données locale
//         total += value;
//         count++;
//         const average = (total / count).toFixed(1);
//         avgDisplay.textContent = average;

//         // Active les bonnes étoiles
//         stars.forEach(s => s.classList.remove('active'));
//         for (let i = 0; i < value; i++) stars[i].classList.add('active');
//       });

//       // Effet hover visuel
//       star.addEventListener('mouseover', () => {
//         stars.forEach(s => s.classList.remove('hover'));
//         for (let i = 0; i < star.dataset.value; i++) stars[i].style.color = '#FFD700';
//       });

//       star.addEventListener('mouseleave', () => {
//         stars.forEach(s => s.style.color = s.classList.contains('active') ? '#FFD700' : '#ccc');
//       });
//     });
//   });
// });
</script>
@endsection
