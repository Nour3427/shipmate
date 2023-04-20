<?php

use App\Model\DeliveryModel;
use App\Model\RequestModel;

$deliveryModel = new DeliveryModel();
$requestModel = new RequestModel();
if (isset($_POST['search'])) {
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $weight = $_POST['weight'];


    if ($departure == "" || $destination == "" || $date == "" || $weight == "") {
        $msg_error = 'Tous les champs doivent être remplis ';
    } else {
        $results = $deliveryModel->getDeliveries($departure, $destination, $date, $weight);
    }
}


if (isset($_POST['send'])) {
    $loggedUser = $_SESSION['user_logged_in_id'];
    if (!isset($loggedUser)) {
        // if user is not connected
        header("Location: connexion");
        exit();
    } else {
        $user_weight= intval($_POST['user_weight']);
        var_dump($user_weight);
        $requestModel->createRequest($user_weight, $loggedUser, $_POST['id_delivery']);
        header("Location: success");
        exit();
       
    }
}


$template = 'search';
include './templates/base.phtml';
