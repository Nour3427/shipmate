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
        header("Location: connexion");
        exit();
    } else {
        $user_weight = intval($_POST['user_weight']);
        $requestModel->createRequest($user_weight, $_SESSION['user_logged_in_id'], $_POST['id_delivery']);
        $_SESSION['success']='demande envoyée';
        header("Location: success");
        exit();
    }
}

// get all delivery requests from the logged in user
$requests = $requestModel->getRequestByUserID($_SESSION['user_logged_in_id']);
// echo '<pre>';
// print_r($requests);


$template = 'search';
include './templates/base.phtml';
