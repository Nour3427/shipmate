<?php


use App\Entity\Delivery;
use App\Entity\User;
use App\Model\DeliveryModel;

$deliveryModel = new DeliveryModel();

if (isset($_POST['publish_submit'])) {
    // conversion from string to int and float 
    $_POST['weight_limit']=intval($_POST['weight_limit']);
    $_POST['remaining_weight']=intval($_POST['weight_limit']);
    $_POST['price']=floatval($_POST['price']);

    $delivery = new Delivery($_POST);
   
    if (isValid($delivery)) {
        $usr = new User(); 
       if(isset($_SESSION['user_logged_in_id'])){
       $loggedUser = $_SESSION['user_logged_in_id']; 
       
        $usr->setIdUser($loggedUser);
        $delivery->setUser($usr);
         $deliveryModel->addDelivery($delivery);
        $_SESSION['successfully_published']='Votre proposition de livraison a été publiée avec succès';
        header("Location: publish");
        exit();
       }else{
        // if user is not connected
        header("Location: login");
        exit();
        }        
    } else {
        $error_msg='Tous les champs doivent être remplis';
    }
}

$template = 'publish';
include './templates/base.phtml';
