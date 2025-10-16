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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://www.thezoombackgrounds.com/cdn/shop/files/1ndI9LjGZhMQ_M5qK2SJ5cbAggi2gT0kM_grande.jpg?v=1737388181')
                no-repeat center center / cover;
            color: white;
            padding: 180px 20px;
            text-align: center;
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
  display: inline-block;
}

.rating .star {
  font-size: 2rem;
  cursor: pointer;
  color: #ccc;
  transition: transform 0.15s ease, color 0.2s ease;
}

.rating .star:hover,
.rating .star.hover,
.rating .star.active {
  color: #FFD700;
  transform: scale(1.15);
}

.rating .star.active ~ .star {
  color: #ccc !important;
}

.rating small {
  font-size: 0.9rem;
  color: #777;
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
            <li><a class="nav-link" href="{{ route('Knowledge') }}"><span data-translate="partners">Knowledge</span></a></li>
            <li><a class="nav-link" href="{{ route('services') }}"><span data-translate="services">Services</span></a></li>
            <li><a class="nav-link" href="{{ route('contact.form') }}"><span data-translate="contact">Contact</span></a></li>
            <button id="theme-toggle" class="btn btn-sm btn-outline-success ms-3">🌙</button>
            </ul>
        </div>
    </div>
    <div class="dropdown mx-2">
    <button class="btn btn-link text-light dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      🌍 FR - FR
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="langDropdown">
      <li><button class="dropdown-item" type="button">FR - FR</button></li>
      <li><button class="dropdown-item" type="button">EN - EN</button></li>
    </ul>
  </div>
</nav>



<!-- ✅ CONTENU -->
<main style="margin-top: 80px;">
    @yield('content')
</main>

<!-- ✅ FOOTER -->
<footer>
    <span>HRIS PRO CONSULTING</span> &copy; {{ date('Y') }} — <span data-translate="footer">Tous droits réservés
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const translations = {
    fr: {
      home: "Accueil",
      about: "À propos",
      partners: "Knowledge",
      services: "Services",
      contact: "Contact",
      welcome: "Bienvenue chez HRIS PRO CONSULTING",
      description: "Nous accompagnons les entreprises dans la mise en place, le déploiement et la maintenance de leurs Systèmes d’Information RH."
    },
    en: {
      home: "Home",
      about: "About",
      partners: "Partners",
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

  document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".rating").forEach((ratingDiv) => {
    const index = ratingDiv.dataset.index;
    const stars = ratingDiv.querySelectorAll(".star");
    const avgDisplay = document.getElementById("avg-" + index);

    // 📦 Charger la note sauvegardée
    let saved = JSON.parse(localStorage.getItem(`rating-${index}`)) || {
      total: 0,
      count: 0,
      userRated: false,
      userValue: 0,
    };

    let { total, count, userRated, userValue } = saved;

    // 🧮 Afficher la moyenne si elle existe
    if (count > 0) avgDisplay.textContent = (total / count).toFixed(1);

    // 🔄 Mettre à jour l’affichage des étoiles (au rechargement)
    if (userRated) {
      for (let i = 0; i < userValue; i++) stars[i].classList.add("active");
    }

    // 🌟 Gestion des clics sur les étoiles
    stars.forEach((star) => {
      star.addEventListener("click", () => {
        const value = parseInt(star.dataset.value);

        // ✅ Si l’utilisateur a déjà noté, on retire son ancienne note
        if (userRated) {
          total -= userValue;
          count -= 1;
        }

        // ➕ Ajout de la nouvelle note
        total += value;
        count += 1;
        userRated = true;
        userValue = value;

        // 🧮 Calcul et affichage de la moyenne
        const average = (total / count).toFixed(1);
        avgDisplay.textContent = average;

        // 💾 Sauvegarde locale
        localStorage.setItem(
          `rating-${index}`,
          JSON.stringify({ total, count, userRated, userValue })
        );

        // 🎨 Mise à jour visuelle
        stars.forEach((s) => s.classList.remove("active"));
        for (let i = 0; i < value; i++) stars[i].classList.add("active");
      });

      // ✨ Effet au survol
      star.addEventListener("mouseover", () => {
        stars.forEach((s) => s.classList.remove("hover"));
        for (let i = 0; i < star.dataset.value; i++)
          stars[i].classList.add("hover");
      });

      star.addEventListener("mouseleave", () => {
        stars.forEach((s) => s.classList.remove("hover"));
      });

      // ♿ Gestion au clavier (barre espace ou entrée)
      star.addEventListener("keydown", (e) => {
        if (e.key === " " || e.key === "Enter") {
          e.preventDefault();
          star.click();
        }
      });
    });
  });
});
</script>





</body>
</html>
