# Hris-Vitrine
# 🏢 HRIS PRO CONSULTING — Site Vitrine Professionnel
# 📖 Sommaire

# Présentation

# Technologies utilisées

# Fonctionnalités principales

# Structure du projet

Installation et configuration

Système de traduction multi-page

Mode sombre persistant

SEO et accessibilité

Bonnes pratiques de maintenance

Auteurs

🧩 Présentation

Le site HRIS PRO CONSULTING est un site vitrine professionnel développé avec Laravel et Bootstrap 5, destiné à présenter les activités du cabinet de conseil spécialisé en Systèmes d’Information RH (Workday).

L’objectif est de proposer une interface élégante, moderne et responsive, tout en intégrant des fonctionnalités interactives :

un mode sombre dynamique ;

un système de traduction multilingue (FR/EN) persistant sur toutes les pages ;

une navigation fluide via une barre de navigation fixe ;

et des pages dédiées : Accueil, À propos, Services, Partenaires et Contact.

🧠 Technologies utilisées
Outil / Langage	Usage principal
Laravel 10+	Framework back-end PHP (routage, Blade, logique serveur)
Bootstrap 5.3	Mise en page responsive et composants UI
HTML5 / CSS3	Structure et styles personnalisés
JavaScript (ES6)	Mode sombre + traduction + persistance utilisateur
JSON (lang.json)	Gestion des langues (FR/EN)
Google Fonts - Inter	Typographie moderne et lisible
🌟 Fonctionnalités principales
✅ 1. Navigation intuitive

Navbar fixe en haut de page ;

Dropdowns pour les menus ;

Liens rapides vers toutes les sections importantes ;

Barre de recherche intégrée.

🌙 2. Mode sombre persistant

Basculer entre thème clair et sombre via un bouton 🌙 / ☀️ ;

Sauvegarde du mode choisi dans localStorage ;

Thème appliqué automatiquement sur toutes les pages.

🌍 3. Traduction multi-page (FR / EN)

Sélecteur de langue dans la barre de navigation ;

Traductions stockées dans /public/js/lang.json ;

Persistance de la langue via localStorage ;

Application automatique des traductions sur toutes les vues Blade.

📱 4. Responsive Design

Interface fluide et lisible sur mobile, tablette et ordinateur ;

Composants adaptatifs via Bootstrap Grid System.

🔒 5. Sécurité & Performance

Code propre et conforme aux bonnes pratiques Laravel ;

Structure légère optimisée pour le référencement SEO ;

Respect des standards d’accessibilité (contraste, structure sémantique).

📂 Structure du projet
📦 hris-pro-consulting
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── AboutController.php
│   │       ├── ServicesController.php
│   │       ├── PartenairesController.php
│   │       └── ContactController.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php   ← Layout principal (navbar, footer, scripts)
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── services.blade.php
│   │   ├── partenaires.blade.php
│   │   └── contact.blade.php
│
├── public/
│   ├── js/
│   │   └── lang.json           ← Fichier de traduction FR / EN
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php                 ← Définition des routes Laravel

⚙️ Installation et configuration
1️⃣ Cloner le projet
git clone https://github.com/ton-repo/hris-pro-consulting.git
cd hris-pro-consulting

2️⃣ Installer les dépendances
composer install
npm install && npm run dev

3️⃣ Configurer l’environnement

Créer le fichier .env :

cp .env.example .env


Configurer la connexion à la base de données et l’URL du site :

APP_NAME=HRIS_PRO_CONSULTING
APP_URL=http://localhost:8000

4️⃣ Générer la clé d’application
php artisan key:generate

5️⃣ Lancer le serveur de développement
php artisan serve

🌍 Système de traduction multi-page

Le système de traduction repose sur :

un fichier JSON (/public/js/lang.json) contenant les textes FR/EN ;

un script JS dans layout.blade.php qui :

détecte la langue enregistrée dans localStorage,

remplace le texte de chaque élément [data-translate],

et sauvegarde la langue choisie pour toutes les pages.

🔹 Exemple :

<li><a class="nav-link" href="#"><span data-translate="services">Services</span></a></li>

🌑 Mode sombre persistant

Le mode sombre est activé via un bouton 🌙 dans la navbar :

<button id="theme-toggle" class="btn btn-sm btn-outline-success ms-3">🌙</button>


Le script gère :

la bascule automatique clair/sombre ;

la sauvegarde dans localStorage ;

l’application automatique du thème sur chaque chargement.

📈 SEO et accessibilité

Titres et descriptions optimisés par page ;

Utilisation de balises sémantiques (<main>, <nav>, <section>) ;

Bon contraste des couleurs (WCAG 2.1) ;

Compatibilité mobile-first ;

Performance optimisée via cache navigateur et minification CSS/JS.

🧰 Bonnes pratiques de maintenance

Mettre à jour Laravel et Bootstrap régulièrement ;

Ne pas modifier directement le fichier lang.json en production sans test ;

Vérifier le responsive à chaque nouvelle section ajoutée ;

Documenter les nouvelles clés de traduction ;

Surveiller la cohérence entre les routes et les vues.

👥 Auteurs

Projet réalisé par :

Yacine Ben Romdhane — Consultant RH Junior chez HRIS PRO CONSULTING
Développement du site vitrine, intégration des fonctionnalités techniques et conception responsive.