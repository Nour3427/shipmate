<?php

use App\Model\DeliveryModel;

session_start();
// Inclusion de l'autoloader de composer



require '../vendor/autoload.php';

// Inclusion de la config
require '../app/config.php';

// Inclusion des dépendances
require '../lib/functions.php';

$deliveryModel = new DeliveryModel();

if (isset($_POST['search'])) {

    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $weight = $_POST['weight'];

    if ($departure == null || $destination == null || $date == null || $weight == null) {
        // error form
    } else {
        $results = $deliveryModel->getDeliveries($departure, $destination, $date, $weight);
    }

}


$template = 'search';
include '../templates/base.phtml';
