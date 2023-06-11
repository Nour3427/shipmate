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
    case 'login':
        require './controllers/login.php';
        break;
    case 'profile':
        require './controllers/profile.php';
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
    case 'ajaxUpdateRequest':
        require './controllers/ajaxUpdateRequest.php';
        break;
    case 'success':
        if (isset($_SESSION['success'])) {
            require './controllers/success.php';
            break;
        }
    case 'administration':
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
            require './controllers/administration.php';
            break;
        }


    default:
        http_response_code(404);
        echo 'Erreur 404 : Page introuvable';
        exit;
}
