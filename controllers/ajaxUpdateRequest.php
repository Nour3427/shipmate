<?php
use App\Model\DeliveryModel;
use App\Model\RequestModel;
$DeliveryModel = new DeliveryModel();
$RequestModel = new RequestModel();
$RequestModel->updateRequest('Acceptée', $_POST['idRequest']);
$remaining_weight = intval($_POST['weight_limit']) - intval($_POST['weight']);
$DeliveryModel->updateDelivery($remaining_weight, $_POST['idDelivery']);
// // Retourne au client la réponse en JSON
// echo json_encode($result);
