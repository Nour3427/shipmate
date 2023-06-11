<?php

use App\Model\DeliveryModel;
use App\Model\RequestModel;
use App\Model\UserModel;

$UserModel = new UserModel();
$DeliveryModel = new DeliveryModel();
$RequestModel = new RequestModel();
$idUser = $_SESSION['user_logged_in_id'];
$errors = [];

if (!isset($idUser)) {
    // Si l'utilisateur est déjà connecté, rediriger vers la page d'accueil
    header('Location: connexion');
    exit;
} else {
    $currentUser = $UserModel->getUserById($idUser);
}
if (isset($_POST['modify_submit'])) {
    // Check if the new firstname field is empty, add error message 
    if (!($_POST['newFirstname'])) {
        $errors['newFirstname'] = 'Veuillez saisir un prénom';
    } else {
        $newFirstname = dataSecure($_POST['newFirstname']);
    }
    // Check if the new lastname field is empty, add error message 
    if (!($_POST['newLastname'])) {
        $errors['newLastname'] = 'Veuillez saisir un nom';
    } else {
        $newLastname = dataSecure($_POST['newLastname']);
    }
    // Check if the new phone_number field is empty, add error message 
    if (!($_POST['newPhone_number'])) {
        $errors['newPhone_number'] = "Veuillez indiquer un numero de téléphone";
    } else {
        // if the phone number format is valid
        $newPhone_number = dataSecure($_POST['newPhone_number']);
        $pattern = '/^(0|\+33)[1-9]( ?\d{2}){4}$/';
        if (!preg_match($pattern, $newPhone_number)) {
            $errors['newPhone_number'] = 'Le format du numéro de téléphone est invalide.';
        }
    }
    // Check if the new email field is empty,add error message 
    if (!($_POST['newEmail'])) {
        $errors['newEmail'] = "Veuillez indiquer une adresse e-mail";
    } elseif ($_POST['newEmail'] == $currentUser->getEmail()) {
        $newEmail = $currentUser->getEmail();
        // if it's a valid email,
    } elseif (!filter_var($_POST['newEmail'], FILTER_VALIDATE_EMAIL)) {
        $errors['newEmail'] = 'Veuillez remplir un email valide';
        // if it's already associated with another user
    } elseif ($UserModel->isEmailExists($_POST['newEmail'])) {
        $errors['newEmail'] = 'Cette adresse e-mail est déjà associée à un autre utilisateur';
    } else {
        $newEmail = dataSecure($_POST['newEmail']);
    }
    // Check if the new password field is not empty,
    if ($_POST['newPassword']) {
        $newPassword = dataSecure($_POST['newPassword']);
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@.#$%^&*()_+-=])[A-Za-z\d!@.#$%^&*()_+-=]{8,}$/', $newPassword)) {
            $errors['newPassword'] = 'Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre et un chiffre.';
        }
        if (!($_POST['currentPassword'])) {
            $errors['currentPassword'] = 'Veuillez saisir votre mot de passe actuel';
        } else {
            if (password_verify($_POST['currentPassword'], $currentUser->getPassword())) {
                $newPassword = dataSecure($_POST['newPassword']);
            } else {
                $errors['currentPassword'] = 'votre mot de passe est incorrect';
            }
        }
    } else {
        if ($_POST['currentPassword']) {
            $errors['newPassword'] = 'Veuillez saisir votre nouveau mot de passe';
        } else {
            $newPassword = $currentUser->getPassword();
        }
    }
    // Check if any of the fields have been modified
    if ($_POST['newFirstname'] != $currentUser->getFirstname() || $_POST['newLastname'] != $currentUser->getLastname() || $_POST['newEmail'] != $currentUser->getEmail() || $_POST['newPhone_number'] != $currentUser->getPhone_number()) {
        if (empty($errors)) {

            if ($newPassword != $currentUser->getPassword()) {
                $hashed_newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            } else {
                $hashed_newPassword = $currentUser->getPassword();
            }
            $UserModel->updateUser($idUser, $newFirstname, $newLastname, $newEmail, $hashed_newPassword, $newPhone_number);
            $_SESSION['message_flash'] = 'Votre modification a été bien enregistrée';
            $_SESSION['user_logged_in_name'] = $newFirstname;
             header("Location: " . $_SERVER['REQUEST_URI']);
            exit();
        }
    }
}

$requests = $RequestModel->getRequestByUserID($idUser);
$deliveries = $DeliveryModel->getDeliveriesWithRequests($idUser);
// if(isset($_POST['accept'])){
//     $RequestModel->updateRequest('Acceptée', $_POST['idRequest']);
//     $remaining_weight=intval($_POST['weight_limit'])-intval($_POST['weight']);
//     $DeliveryModel->updateDelivery($remaining_weight,$_POST['idDelivery']);
//     $result = [
//         'id' => $_POST['idRequest'],
//         'weight'=>$_POST['weight'],
//         'remaining_weight' => $remaining_weight,

//     ];

//     // Retourne au client la réponse en JSON
//     echo json_encode($result);

// }

$template = 'profile';
include './templates/base.phtml';
