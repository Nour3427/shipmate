<?php

// Démarrage de la session
session_start();

$path = $_GET['url'];

// Inclusion de l'autoloader de composer
require './vendor/autoload.php';

// Inclusion de la config
require './app/config.php';

// Inclusion des dépendances
require './lib/functions.php';

// Routing
switch ($path) {
    case '':
        require './controllers/home.php';
        break;
    case 'connexion':
        require './controllers/connexion.php';
        break;
    case 'profile':
        require './controllers/profile.php';
        break;
    case 'annonce_details':
        require './controllers/annonce_details.php';
        break;
    case 'publish':
        require './controllers/publish.php';
        break;
    case 'search':
        require './controllers/search.php';
        break;
    case 'logout':
        require './controllers/logout.php';
        break;
    case 'success':
        if (isset($_SESSION['success'])) {
            require './controllers/success.php';
            break;
        }


    default:
        http_response_code(404);
        echo 'Erreur 404 : Page introuvable';
        exit;
}
