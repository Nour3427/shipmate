<?php
// unset($_SESSION['user_logged_in_id']);

use App\Model\DeliveryModel;
use App\Model\RequestModel;
use App\Model\UserModel;

$UserModel=new UserModel();
$DeliveryModel=new DeliveryModel();
$RequestModel=new RequestModel();
$users=$UserModel->getAllUsers();
$deliveries=$DeliveryModel->getAllDeliveries();
$requests=$RequestModel->getAllRequests();
// echo'<pre>';
// print_r($requests);
$template='administration';
include './templates/base.phtml';