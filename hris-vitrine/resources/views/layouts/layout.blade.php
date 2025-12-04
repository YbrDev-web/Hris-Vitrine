<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HRIS PRO CONSULTING</title>

    <!-- ================== FONTS & ICONS ================== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z+Pcb8u5DEJmWxuQe1M9O1rcSg4Az+ljXTT8mf4hKqgIUVBIFNgEzJpIbIFx5F5hoWlBY3EliYHQm5q4+f6AMg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <!-- ================== BOOTSTRAP ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ================== PARTICLES.JS ================== -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- ================== STYLES ================== -->
    <style>
        /* ================== VARIABLES ================== */
        :root {
            --primary: #21ACC4;
            --primary-dark: #187B8C;
            --text-dark: #1a1a1a;
            --bg-light: #f8f9fa;
        }

        /* ================== GLOBAL ================== */
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        body.dark-mode {
            background-color: #121212;
            color: #f1f1f1;
        }

        /* ================== NAVBAR ================== */
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

        body.dark-mode .navbar {
            background-color: #1f1f1f;
        }

        body.dark-mode .navbar-nav a {
            color: #f1f1f1 !important;
        }

        /* ================== HERO ================== */
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

        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: radial-gradient(circle at center, #21ACC4, #000);
        }

        body.dark-mode #particles-js {
            background: radial-gradient(circle at center, #000, #0a0a0a);
        }

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
            transform: translateY(-2px);
        }

        /* ================== EXPERTISE ================== */
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

        .expertise-card, .knowledge-card, .partner-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .expertise-card:hover, .knowledge-card:hover, .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .expertise-card h4 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .expertise-card p, .knowledge-card p {
            color: #666;
        }

        .knowledge-card img {
            height: 200px;
            object-fit: cover;
        }

        .partner-card img {
            max-height: 60px;
            object-fit: contain;
        }

        /* ================== FOOTER ================== */
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

        body.dark-mode footer {
            background-color: #000;
            color: #aaa;
        }

        /* ================== RESPONSIVE ================== */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1rem; }
            .navbar-nav .nav-link { margin-left: 0; margin-top: 10px; }
            .expertise-card { padding: 30px 20px; }
        }
    </style>
</head>

<body>
<!-- ================== NAVBAR ================== -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">HRIS PRO CONSULTING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('home') }}" data-translate="home">Accueil</a></li>
                <li><a class="nav-link" href="{{ route('about') }}" data-translate="about">À propos</a></li>
                <!-- <li><a class="nav-link" href="{{ route('knowledge') }}" data-translate="Knowledge">Knowledge</a></li> -->
                <li><a class="nav-link" href="{{ route('articles') }}" data-translate="Knowledge">Connaissance</a></li>
                <li><a class="nav-link" href="{{ route('services') }}" data-translate="services">Services</a></li>
                <li><a class="nav-link" href="{{ route('contact.form') }}" data-translate="contact">Contact</a></li>
                <button id="theme-toggle" class="btn btn-sm btn-outline-success ms-3">🌙</button>
            </ul>
        </div>
    </div>

    <!-- Dropdown Langues -->
    <div class="dropdown mx-2">
        <button class="btn btn-link text-light dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">🌍 FR</button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="langDropdown">
            <li><button class="dropdown-item" type="button">FR</button></li>
            <li><button class="dropdown-item" type="button">EN</button></li>
            <!-- <li><button class="dropdown-item" type="button">EN(RU)</button></li> -->
        </ul>
    </div>
</nav>

<!-- ================== CONTENU ================== -->
<main style="margin-top: 80px;">
    @yield('content')
</main>

<!-- ================== FOOTER ================== -->
<footer class="text-center py-3">
    <p class="mb-2">
        <span>HRIS PRO CONSULTING</span> &copy; {{ date('Y') }} —
        <span data-translate="footer">Tous droits réservés</span>
    </p>
    <div class="social-section mt-3">
        <p class="text-muted mb-2" style="font-size: 0.9rem;">Suivez-nous :</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/login" target="_blank" aria-label="LinkedIn" class="mx-2">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" alt="LinkedIn" width="24" height="24"
                     style="filter: invert(60%) sepia(75%) saturate(500%) hue-rotate(160deg);">
            </a>
        </div>
    </div>
</footer>

<!-- Pop-up pour ajouter des articles -->
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


<!-- ================== SCRIPTS ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    /* ================== Traduction ================== */
    const translations = {
    fr: {
        home: "Accueil",
        about: "À propos",
        Knowledge: "Connaissances",
        services: "Services",
        contact: "Contact",
        footer: "Tous droits réservés",

        hero_title: "Votre partenaire SIRH & Workday",
        hero_subtitle: "HRIS PRO CONSULTING accompagne les entreprises dans l’optimisation de leurs systèmes RH.",
        contact_us: "Contactez-nous",

        expertises_title: "Nos expertises",

        expertise1_title: "Conseil SIRH",
        expertise1_text: "Analyse, cadrage et mise en œuvre de solutions RH adaptées à votre organisation.",

        expertise2_title: "Intégration Workday",
        expertise2_text: "Déploiement, configuration et accompagnement au changement pour vos équipes.",

        expertise3_title: "Optimisation des processus",
        expertise3_text: "Audit et amélioration continue de vos processus RH pour une performance durable.",

        knowledge: "Knowledge",

        /* ======== PAGE CONTACT ======== */
        contact_title: "Contactez-nous",
        contact_success: "Votre message a bien été envoyé !",

        full_name_label: "Nom complet",
        full_name_placeholder: "Votre nom complet",

        email_label: "Adresse email",
        email_placeholder: "Votre adresse email",

        organization_label: "Organisation",
        organization_placeholder: "Votre organisation",

        city_label: "Ville",
        city_placeholder: "Votre ville",

        phone_label: "Numéro de téléphone",
        phone_placeholder: "Votre numéro",

        linkedin_label: "LinkedIn",
        linkedin_placeholder: "Votre profil LinkedIn",

        message_label: "Votre message",
        message_placeholder: "Écrivez votre message...",

        send_button: "Envoyer",

        // ======== PAGE ARTICLES ========
        knowledge_title: "Base de Connaissances",
        articles_subtitle: "Découvrez les derniers articles sur le domaine SIRH.",

        add_rss_button: "+ Ajouter flux RSS",

        article_read: "Lire l'article",
        article_empty: "Aucun article trouvé pour le moment.",

        flash_success: "Flux ajouté avec succès.",
        flash_error: "Une erreur est survenue.",

        // ======== PAGE SERVICES ========
        services_hero_title: "Nos services",
        services_hero_subtitle: "Des solutions sur mesure pour accompagner votre transformation digitale RH.",

        services_expertises_title: "Nos expertises",
        services_expertises_subtitle: "Découvrez les domaines d’intervention de HRIS PRO CONSULTING",

        services1_title: "Conseil SIRH",
        services1_text: "Diagnostic, cadrage et mise en œuvre de solutions RH adaptées à vos besoins spécifiques.",

        services2_title: "Intégration Workday",
        services2_text: "Déploiement, paramétrage et accompagnement au changement sur la suite Workday.",

        services3_title: "Optimisation des processus",
        services3_text: "Audit, automatisation et amélioration continue de vos processus RH pour plus d’efficacité.",

        sectors_title: "Nos secteurs d’intervention",
        sectors_subtitle: "HRIS PRO CONSULTING accompagne des entreprises de tous horizons dans leur digitalisation RH.",

        sector_finance_title: "Finance",
        sector_finance_text: "Optimisation des processus RH et paie dans le secteur bancaire et financier.",

        sector_industry_title: "Industrie",
        sector_industry_text: "Accompagnement des acteurs industriels dans la transformation de leurs SIRH.",

        sector_services_title: "Services",
        sector_services_text: "Support complet aux entreprises de conseil et de prestation RH.",

        sector_public_title: "Secteur public",
        sector_public_text: "Accompagnement des institutions publiques dans la modernisation de leurs SIRH.",

        cta_title: "Besoin d’un accompagnement personnalisé ?",
        cta_text: "Nos experts sont à votre disposition pour échanger sur vos projets Workday ou SIRH.",
        cta_contact: "Contactez-nous"
    },

    en: {
        home: "Home",
        about: "About",
        Knowledge: "Knowledge",
        services: "Services",
        contact: "Contact",
        footer: "All rights reserved",

        hero_title: "Your HRIS & Workday Partner",
        hero_subtitle: "HRIS PRO CONSULTING supports companies in optimizing their HR systems.",
        contact_us: "Contact us",

        expertises_title: "Our Expertise",

        expertise1_title: "HRIS Consulting",
        expertise1_text: "Analysis, scoping and implementation of HR solutions tailored to your organization.",

        expertise2_title: "Workday Integration",
        expertise2_text: "Deployment, configuration and change management for your teams.",

        expertise3_title: "Process Optimization",
        expertise3_text: "Audit and continuous improvement of your HR processes for long-term performance.",

        knowledge: "Knowledge",

        /* ======== PAGE CONTACT ======== */
        contact_title: "Contact us",
        contact_success: "Your message has been successfully sent!",

        full_name_label: "Full name",
        full_name_placeholder: "Your full name",

        email_label: "Email address",
        email_placeholder: "Your email address",

        organization_label: "Organization",
        organization_placeholder: "Your company / organization",

        city_label: "City",
        city_placeholder: "Your city",

        phone_label: "Phone number",
        phone_placeholder: "Your phone number",

        linkedin_label: "LinkedIn",
        linkedin_placeholder: "Your LinkedIn profile",

        message_label: "Your message",
        message_placeholder: "Write your message...",

        send_button: "Send",

        // ======== PAGE ARTICLES ========
        knowledge_title: "Knowledge",
        articles_subtitle: "Discover the latest articles in the HRIS field.",
        
        add_rss_button: "+ Add RSS feed",
        
        article_read: "Read article",
        article_empty: "No articles found at the moment.",
        
        flash_success: "Feed successfully added.",
        flash_error: "An error has occurred.",

        // ======== PAGE SERVICES ========
        services_hero_title: "Our Services",
        services_hero_subtitle: "Tailored solutions to support your HR digital transformation.",

        services_expertises_title: "Our Expertise",
        services_expertises_subtitle: "Discover HRIS PRO CONSULTING's areas of intervention",

        services1_title: "HRIS Consulting",
        services1_text: "Diagnosis, scoping and implementation of HR solutions tailored to your specific needs.",

        services2_title: "Workday Integration",
        services2_text: "Deployment, configuration and change management on the Workday suite.",

        services3_title: "Process Optimization",
        services3_text: "Audit, automation and continuous improvement of your HR processes for greater efficiency.",

        sectors_title: "Our Business Sectors",
        sectors_subtitle: "HRIS PRO CONSULTING supports companies from all industries in their HR digitalization.",

        sector_finance_title: "Finance",
        sector_finance_text: "Optimization of HR and payroll processes in the banking and financial sector.",

        sector_industry_title: "Industry",
        sector_industry_text: "Support for industrial companies in transforming their HRIS.",

        sector_services_title: "Services",
        sector_services_text: "Full support for consulting and HR service companies.",

        sector_public_title: "Public Sector",
        sector_public_text: "Support for public institutions in modernizing their HRIS.",

        cta_title: "Need personalized support?",
        cta_text: "Our experts are available to discuss your Workday or HRIS projects.",
        cta_contact: "Contact us"
    }
};

    const langButtons = document.querySelectorAll('.dropdown-item');
    const langDropdown = document.getElementById('langDropdown');

    function setLanguage(lang) {
        localStorage.setItem('lang', lang);
        langDropdown.textContent = lang === 'fr' ? "🌍 FR - FR" : "🌍 EN - EN";
        document.querySelectorAll('[data-translate]').forEach(el => {
            const key = el.getAttribute('data-translate');
            el.textContent = translations[lang][key] || el.textContent;
        });
    }

    setLanguage(localStorage.getItem('lang') || 'fr');
    langButtons.forEach(btn => btn.addEventListener('click', () => setLanguage(btn.textContent.includes('EN') ? 'en' : 'fr')));

    /* ================== Dark Mode ================== */
    const toggle = document.getElementById('theme-toggle');
    const body = document.body;
    if (localStorage.getItem('dark-mode') === 'true') { body.classList.add('dark-mode'); toggle.textContent='☀️'; }

    toggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const isDark = body.classList.contains('dark-mode');
        toggle.textContent = isDark ? '☀️' : '🌙';
        localStorage.setItem('dark-mode', isDark);
    });

    /* ================== Particles ================== */
    particlesJS('particles-js', {
        "particles": {
            "number": {"value": 90,"density": {"enable": true,"value_area": 900}},
            "color": {"value": "#21ACC4"},
            "shape": {"type": "circle"},
            "opacity": {"value": 0.5,"random": false},
            "size": {"value": 3,"random": true},
            "line_linked": {"enable": true,"distance": 150,"color": "#21ACC4","opacity": 0.3,"width": 1},
            "move": {"enable": true,"speed": 1.5,"direction": "none","random": false,"out_mode": "out"}
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {"onhover": {"enable": true,"mode": "grab"}, "onclick": {"enable": true,"mode": "push"}},
            "modes": {"grab": {"distance": 200,"line_linked": {"opacity": 0.6}}, "push": {"particles_nb": 4}}
        },
        "retina_detect": true
    });
</script>

</body>
</html>
