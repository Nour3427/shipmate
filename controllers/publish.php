<?php

session_start();

use App\Entity\Delivery;
use App\Entity\User;
use App\Model\DeliveryModel;

require '../vendor/autoload.php';

// Inclusion de la config
require '../app/config.php';

// Inclusion des dépendances
require '../lib/functions.php';

$deliveryModel = new DeliveryModel();

if (isset($_POST['publish_submit'])) {
    // conversion from string to int and float 
    $_POST['weight_limit'] = intval($_POST['weight_limit']);
    $_POST['price'] = floatval($_POST['price']);

    $delivery = new Delivery($_POST);
    echo '<pre>';
    print_r($delivery);

    $loggedUser = $_SESSION['user_logged_in_id'];

    if (!isset($loggedUser)) {
        // if user is not connected
        header("Location: connexion.php");
        exit();
    }

    if (isValid($delivery)) {
        $usr = new User();
        $usr->setIdUser($loggedUser);
        echo '<pre>';
        print_r($usr);
        $delivery->setUser($usr);
        $deliveryModel->addDelivery($delivery);
        echo '<pre>';
        print_r($delivery);
    } else {
        // print error in form
    }
}

$template = 'publish';
include '../templates/base.phtml';
