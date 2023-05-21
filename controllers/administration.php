<?php
// unset($_SESSION['user_logged_in_id']);


use App\Model\DeliveryModel;
use App\Model\RequestModel;
use App\Model\UserModel;

$UserModel = new UserModel();
$DeliveryModel = new DeliveryModel();
$RequestModel = new RequestModel();
$users = $UserModel->getAllUsers();
$deliveries = $DeliveryModel->getAllDeliveries();
$requests = $RequestModel->getAllRequests();

if (isset($_POST['user_delete'])) {
    $idUser = $_POST['id_user'];
    $UserModel->deleteUser($idUser);
    header('Location: administration#users_details');
    exit();
}
    
    

if (isset($_POST['delivery_delete'])) {
    $idDelivery = $_POST['id_delivery'];
    $DeliveryModel->deleteDelivey($idDelivery);
    header('Location: administration#delivery_announcements_details');
    exit();
        
}

if (isset($_POST['request_delete'])) {
    $idRequest = $_POST['id_request'];
    $RequestModel->deleteRequest($idRequest);
    $DeliveryModel->deleteDelivey($idDelivery);
    header('Location: administration#requests_details');
    exit();
    

}
$template = 'administration';
include './templates/base.phtml';
