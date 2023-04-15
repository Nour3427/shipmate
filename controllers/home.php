<?php
session_start();
// Inclusion de l'autoloader de composer



require '../vendor/autoload.php';

// Inclusion de la config
require '../app/config.php';

// Inclusion des dépendances
require '../lib/functions.php';
$template='home';
include '../templates/base.phtml';