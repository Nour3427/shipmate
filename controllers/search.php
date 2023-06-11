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

// echo '<pre>';
// print_r($results);


if (isset($_POST['send'])) {

    if (!isset($_SESSION['user_logged_in_id'])) {
        // if user is not connected
        header("Location: login");
        exit();
    } else {
        $user_weight = intval($_POST['user_weight']);
        $requestModel->createRequest($user_weight, $_SESSION['user_logged_in_id'], $_POST['id_delivery']);
        $_SESSION['success']='demande envoyée';
        header("Location: success");
        exit();
    }
}
if (isset($_SESSION['user_logged_in_id'])) {
    // Si l'utilisateur est connecté, récupérer les demandes liées à son ID
    $requests = $requestModel->getRequestByUserID($_SESSION['user_logged_in_id']);
}



$template = 'search';
include './templates/base.phtml';
