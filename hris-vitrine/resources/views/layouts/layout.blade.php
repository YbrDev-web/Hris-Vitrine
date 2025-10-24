<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HRIS PRO CONSULTING</title>

    <!-- ✅ Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


    <style>
        :root {
            --primary: #21ACC4;
            --primary-dark: #187B8C;
            --text-dark: #1a1a1a;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* ✅ NAVBAR */
        .navbar {
            background-color: #000 !important;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            padding: 0.8rem 1rem;
        }

        .navbar-brand {
            color: var(--primary) !important;
            font-weight: 700;
            font-size: 1.4rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .navbar-nav .nav-link {
            color: #f2f2f2 !important;
            font-weight: 500;
            margin-left: 20px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-1px);
        }

        /* ✅ SECTION HERO */
        .hero {
          position: relative;
          height: 100vh;
          color: white;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
          overflow: hidden;
        }

/* ✅ Particles en arrière-plan */
        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(circle at center, #21ACC4, #000);
        }

/* ✅ Contenu du Hero au-dessus */
        .hero-content {
            position: relative;
            z-index: 1;
        }


        .hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 25px;
            color: #e6e6e6;
        }

        .btn-main {
            background: var(--primary-dark);
            color: white;
            padding: 12px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-main:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* ✅ SECTION EXPERTISES */
        .expertises {
            text-align: center;
            padding: 100px 20px;
            background: white;
        }

        .expertises h2 {
            font-weight: 700;
            margin-bottom: 50px;
            color: var(--text-dark);
        }

        .expertise-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 40px 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .expertise-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .expertise-card h4 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .expertise-card p {
            color: #666;
        }

        /* ✅ FOOTER */
        footer {
            background: #0d0d0d;
            color: #ccc;
            text-align: center;
            padding: 2rem 0;
            margin-top: 60px;
        }

        footer span {
            color: var(--primary);
            font-weight: 600;
        }

        /* ✅ RESPONSIVE */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .navbar-nav .nav-link {
                margin-left: 0;
                margin-top: 10px;
            }

            .expertise-card {
                padding: 30px 20px;
            }
        }

        body.dark-mode {
      background-color: #121212;
      color: #f1f1f1;
    }

    body.dark-mode .navbar {
      background-color: #1f1f1f;
    }

    body.dark-mode .navbar-nav a {
      color: #f1f1f1 !important;
    }

    body.dark-mode footer {
      background-color: #000;
      color: #aaa;
    }

    body.dark-mode .dropdown-menu {
      background-color: #1e1e1e;
      border: 1px solid #333;
    }

    body.dark-mode .dropdown-item {
      color: #ddd;
    }

    body.dark-mode .dropdown-item:hover {
      background-color: #2b2b2b;
      color: #00b050 !important;
    }

    body.dark-mode .topbar {
      background-color: #111;
      color: #bbb;
    }

    body.dark-mode .topbar .icon {
      color: #bbb;
    }

    .partner-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
  }
  .partner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
  }
  .partner-card img {
    max-height: 60px;
    object-fit: contain;
  }

  .knowledge-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 12px;
  overflow: hidden;
}
.knowledge-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}
.knowledge-card img {
  height: 200px;
  object-fit: cover;
}

.rating {
  font-size: 1.5rem;
  color: #ccc;
  cursor: pointer;
}

.star {
  background: none;
  border: none;
  color: #ccc;
  transition: color 0.3s ease, transform 0.2s ease;
}

.star:hover {
  transform: scale(1.2);
}

.star.active {
  color: #FFD700;
}

.star:hover,
.star:focus {
  color: #FFD700;
  outline: none;
}

body.dark-mode #particles-js {
  background: radial-gradient(circle at center, #000, #0a0a0a);
}

.cookie-banner {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: #1b1b1b;
  color: white;
  text-align: center;
  padding: 15px;
  font-size: 14px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  box-shadow: 0 -3px 10px rgba(0,0,0,0.3);
  z-index: 1000;
}

.cookie-actions {
  display: flex;
  gap: 10px;
}

.btn-cookie {
  padding: 8px 16px;
  border-radius: 6px;
  cursor: pointer;
  border: none;
  font-weight: 600;
}

.btn-cookie.accept {
  background-color: #007BFF;
  color: white;
}

.btn-cookie.decline {
  background-color: #444;
  color: white;
}






    </style>
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  integrity="sha512-z+Pcb8u5DEJmWxuQe1M9O1rcSg4Az+ljXTT8mf4hKqgIUVBIFNgEzJpIbIFx5F5hoWlBY3EliYHQm5q4+f6AMg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>

</head>
<body>

<!-- ✅ NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">HRIS PRO CONSULTING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li><a class="nav-link" href="{{ route('home') }}"><span data-translate="home">Accueil</span></a></li>
            <li><a class="nav-link" href="{{ route('about') }}"><span data-translate="about">À propos</span></a></li>
            <li><a class="nav-link" href="{{ route('Knowledge') }}"><span data-translate="Article">Article</span></a></li>
            <li><a class="nav-link" href="{{ route('services') }}"><span data-translate="services">Services</span></a></li>
            <li><a class="nav-link" href="{{ route('contact.form') }}"><span data-translate="contact">Contact</span></a></li>
            <li><a href="{{ route('login') }}" class="btn btn-outline-light ms-3">Connexion</a></li>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="btn btn-outline-danger">Déconnexion</button></form>


            <button id="theme-toggle" class="btn btn-sm btn-outline-success ms-3">🌙</button>
            </ul>
        </div>
    </div>
    <div class="dropdown mx-2">
    <button class="btn btn-link text-light dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      🌍 FR
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="langDropdown">
      <li><button class="dropdown-item" type="button">FR</button></li>
      <li><button class="dropdown-item" type="button">EN</button></li>
      <li><button class="dropdown-item" type="button">EN(RU)</button></li>
    </ul>
  </div>
</nav>



<!-- ✅ CONTENU -->
<main style="margin-top: 80px;">
    @yield('content')
</main>

<!-- ✅ FOOTER -->
<footer class="text-center py-3" style="background-color: #0a0a0a; color: #fff;">
    <!-- Texte principal -->
    <p class="mb-2">
        <span style="color:#21ACC4; font-weight:600;">HRIS PRO CONSULTING</span>
        &copy; {{ date('Y') }} —
        <span data-translate="footer" style="color:#21ACC4;">Tous droits réservés</span>
    </p>

    <!-- 🔗 Section réseaux sociaux -->
    <div class="social-section mt-3">
        <p class="text-muted mb-2" style="font-size: 0.9rem;">Suivez-nous :</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/login" target="_blank" aria-label="LinkedIn" class="mx-2">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg"
                     alt="LinkedIn" width="24" height="24"
                     style="filter: invert(60%) sepia(75%) saturate(500%) hue-rotate(160deg);">
            </a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const translations = {
    fr: {
      home: "Accueil",
      about: "À propos",
      Article: "Article",
      services: "Services",
      contact: "Contact",
      welcome: "Bienvenue chez HRIS PRO CONSULTING",
      description: "Nous accompagnons les entreprises dans la mise en place, le déploiement et la maintenance de leurs Systèmes d’Information RH."
    },
    en: {
      home: "Home",
      about: "About",
      Article: "Knowledge",
      services: "Services",
      contact: "Contact",
      welcome: "Welcome to HRIS PRO CONSULTING",
      description: "We support companies in the implementation, deployment, and maintenance of their HR Information Systems."
    }
  };
</script>


<script>
  // ✅ Mode sombre persistant
  const toggle = document.getElementById('theme-toggle');
  const body = document.body;

  if (localStorage.getItem('dark-mode') === 'true') {
    body.classList.add('dark-mode');
    toggle.textContent = '☀️';
  }

  toggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const isDark = body.classList.contains('dark-mode');
    toggle.textContent = isDark ? '☀️' : '🌙';
    localStorage.setItem('dark-mode', isDark);
  });
</script>

<script>
  const langButtons = document.querySelectorAll('.dropdown-item');
  const langDropdown = document.getElementById('langDropdown');

  function setLanguage(lang) {
    localStorage.setItem('lang', lang);
    langDropdown.textContent = (lang === 'fr') ? "🌍 FR - FR" : "🌍 EN - EN";
    
    // ✅ Met à jour tous les textes traduisibles
    document.querySelectorAll('[data-translate]').forEach(el => {
      const key = el.getAttribute('data-translate');
      el.textContent = translations[lang][key] || el.textContent;
    });
  }

  // ✅ Applique la langue sauvegardée au chargement
  const savedLang = localStorage.getItem('lang') || 'fr';
  setLanguage(savedLang);

  // ✅ Lors du clic sur un bouton de langue
  langButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const selectedLang = btn.textContent.includes('EN') ? 'en' : 'fr';
      setLanguage(selectedLang);
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
  // Charger les notes existantes
  const ratings = JSON.parse(localStorage.getItem('knowledgeRatings')) || {};

  document.querySelectorAll('.rating').forEach(ratingDiv => {
    const cardId = ratingDiv.dataset.cardId;
    const stars = ratingDiv.querySelectorAll('.star');
    const avgDisplay = document.getElementById('avg-' + cardId);

    // Si une note existe déjà, l’afficher
    if (ratings[cardId]) {
      updateStars(stars, ratings[cardId].average);
      avgDisplay.textContent = ratings[cardId].average.toFixed(1);
    }

    // Écouteur sur chaque étoile
    stars.forEach(star => {
      star.addEventListener('click', () => {
        const value = parseInt(star.dataset.value);

        // Enregistrer la note dans le localStorage
        if (!ratings[cardId]) {
          ratings[cardId] = { total: 0, count: 0, average: 0 };
        }

        ratings[cardId].total += value;
        ratings[cardId].count++;
        ratings[cardId].average = ratings[cardId].total / ratings[cardId].count;

        localStorage.setItem('knowledgeRatings', JSON.stringify(ratings));

        // Mettre à jour l’affichage
        updateStars(stars, ratings[cardId].average);
        avgDisplay.textContent = ratings[cardId].average.toFixed(1);
      });

      // Effet visuel au survol
      star.addEventListener('mouseover', () => highlightStars(stars, parseInt(star.dataset.value)));
      star.addEventListener('mouseleave', () => {
        const avg = ratings[cardId]?.average || 0;
        updateStars(stars, avg);
      });
    });
  });

  // Fonction pour mettre à jour les étoiles
  function updateStars(stars, average) {
    stars.forEach((star, index) => {
      star.classList.toggle('active', index < Math.round(average));
    });
  }

  // Fonction effet hover
  function highlightStars(stars, value) {
    stars.forEach((star, index) => {
      star.style.color = index < value ? '#FFD700' : '#ccc';
    });
  }

  function socialLogin(platform) {
    localStorage.setItem('userLoggedIn', 'true');
    localStorage.setItem('loginMethod', platform);

    Swal.fire({
      icon: 'success',
      title: `Connecté via ${platform}`,
      text: 'Redirection en cours...',
      showConfirmButton: false,
      timer: 1500
    });

    setTimeout(() => {
      window.location.href = document.referrer || "{{ route('home') }}";
    }, 1600);
  }

  particlesJS('particles-js', {
  "particles": {
    "number": {
      "value": 90,
      "density": {"enable": true, "value_area": 900}
    },
    "color": {"value": "#21ACC4"},
    "shape": {"type": "circle"},
    "opacity": {"value": 0.5, "random": false},
    "size": {"value": 3, "random": true},
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#21ACC4",
      "opacity": 0.3,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1.5,
      "direction": "none",
      "random": false,
      "out_mode": "out"
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {"enable": true, "mode": "grab"},
      "onclick": {"enable": true, "mode": "push"}
    },
    "modes": {
      "grab": {"distance": 200, "line_linked": {"opacity": 0.6}},
      "push": {"particles_nb": 4}
    }
  },
  "retina_detect": true
});




// Attacher les bons fournisseurs à chaque bouton
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('button');

    buttons.forEach((btn) => {
        if (btn.textContent.includes('LinkedIn')) {
            btn.onclick = () => openLinkedInPopup('LinkedIn');
        } else if (btn.textContent.includes('Google')) {
            btn.classList.add('btn-google');
            btn.onclick = () => openLinkedInPopup('Google');
        } else if (btn.textContent.includes('Microsoft')) {
            btn.classList.add('btn-microsoft');
            btn.onclick = () => openLinkedInPopup('Microsoft');
        }
    });
});

function openPopup(url) {
    const width = 600;
    const height = 700;
    const left = (window.innerWidth / 2) - (width / 2);
    const top = (window.innerHeight / 2) - (height / 2);

    // 🚀 Ouvre la popup de connexion
    const popup = window.open(
        url,
        'SocialLogin',
        `width=${width},height=${height},top=${top},left=${left},resizable=no,scrollbars=yes,status=no`
    );

    // 🔄 Vérifie si la popup est fermée, puis recharge la page
    const timer = setInterval(() => {
        if (popup.closed) {
            clearInterval(timer);
            window.location.reload();
        }
    }, 500);
}

});

</script>

</body>
</html>
