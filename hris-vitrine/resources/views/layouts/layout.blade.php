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
        }
        header {
            background: #0d0d0d;
            padding: 1rem;
        }
        header a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-weight: 600;
        }
        header a:hover {
            color: #00b050;
        }
        footer {
            background: #0d0d0d;
            color: #ccc;
            text-align: center;
            padding: 1rem 0;
            margin-top: 50px;
        }
        .hero {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1581090700227-1e37b190418e') no-repeat center center/cover;
            color: white;
            padding: 150px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .btn-main {
            background: #00b050;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-main:hover {
            background: #009041;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="text-white">HRIS PRO CONSULTING</h2>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('contact.form') }}">Contact</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} HRIS PRO CONSULTING - Tous droits réservés
</footer>

</body>
</html>
