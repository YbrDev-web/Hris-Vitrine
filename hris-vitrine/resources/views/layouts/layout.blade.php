<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HRIS PRO CONSULTING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* ✅ NAVBAR */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            color: #00b050 !important;
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: 1px;
        }

        .navbar-nav a {
            color: #333 !important;
            font-weight: 500;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        .navbar-nav a:hover {
            color: #00b050 !important;
        }

        /* ✅ SECTION HERO */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url('https://images.unsplash.com/photo-1581090700227-1e37b190418e') no-repeat center center/cover;
            color: white;
            padding: 180px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .btn-main {
            background: #00b050;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn-main:hover {
            background: #009041;
            color: white;
        }

        /* ✅ SECTION EXPERTISES */
        .expertises {
            text-align: center;
            padding: 80px 20px;
        }

        .expertises h2 {
            font-weight: 700;
            margin-bottom: 40px;
        }

        .expertises .col-md-4 {
            margin-bottom: 30px;
        }

        /* ✅ FOOTER */
        footer {
            background: #0d0d0d;
            color: #ccc;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 60px;
        }

        footer span {
            color: #00b050;
            font-weight: 600;
        }
    </style>
</head>
<body>

<!-- ✅ NAVBAR EN HAUT -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">HRIS PRO CONSULTING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
                <li><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li><a class="nav-link" href="{{ route('contact.form') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ✅ CONTENU DES PAGES -->
<main style="margin-top: 80px;">
    @yield('content')
</main>

<!-- ✅ FOOTER -->
<footer>
    <span>HRIS PRO CONSULTING</span> &copy; {{ date('Y') }} — Tous droits réservés
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
