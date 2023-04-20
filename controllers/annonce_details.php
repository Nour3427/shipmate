<?php

use App\Model\DeliveryModel;
use App\Model\RequestModel;

$deliveryModel = new DeliveryModel();
$RequestModel = new RequestModel();

if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id'])) {
    http_response_code(404);
    echo 'Annonce introuvable';
    exit; // Fin de l'exécution du script PHP
}


$idDelivery = $_GET['id'];
$delivery = $deliveryModel->getDelivery($idDelivery);

if (!$delivery) {
    http_response_code(404);
    echo 'Annonce introuvable';
    exit; // Fin de l'exécution du script PHP
}else{
    if(isset($_POST['send'])) {
        $loggedUser = $_SESSION['user_logged_in_id'];
        if (!isset($loggedUser)) {
            // if user is not connected
            header("Location: connexion");
            exit();
        }

        if(!isset($_SESSION['weight']))
        $RequestModel->createRequest();


}
}


$template = 'annonce_details';
include './templates/base.phtml';
