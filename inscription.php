<?php
require './app/config.php';
require './src/Core/Database.php';
require './src/Core/AbstractModel.php';
require './src/Model/UserModel.php';
require './src/Entity/User.php';



use App\Model\UserModel;


$user = new UserModel();
if (!empty($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $errors = [];


    if (!$firstname) {
        $errors['firstname'] = "merci d'indique un prénom";
    }
    if (!$lastname) {
        $errors['lastname'] = "merci d'indique un nom";
    }
    if (!$email) {
        $errors['email'] = "merci d'indique un email";
    } elseif (($user->isEmailExists($email)) != true) {
        $errors['email'] = 'email existe deja';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = " adresse mail n'est pas valide ";
    }
    if (!$password) {
        $errors['password'] = "merci d'indique un mot de passe";
    }
    if (!$phone_number) {
        $errors['phone_number'] = "merci d'indique votre numero de telephone ";
    }


    if (empty($errors)) {
        $user->addUser($firstname, $lastname, $email, $password, $phone_number);
    }
}
// if (!empty($_POST)) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $error_message = '';
//     if (!$email || !$password) {
//         $error_message = 'veuillez remplir tout les champs';
//     } else {
//         $data = $user->verifyUserExistsByMail($email);
//         if ($data == null) {
//             $error_message = "il n'existe pas un compte avec cet email";
//         } else {
//             if ($data->getPassword() == $password) {
//                 var_dump('yess');
//             }else{
//                 $error_message = "mot de pass incorrect";
//             }

//         }
//     }
// }

//     if(!empty($_POST)){
//         $email=$_POST['email'];
//         $password=$_POST['password'];
//         $error_message='';

//  if (!$email){
//         $errors['email']="merci d'indique un email";
//     }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors['email'] = " adresse mail n'est pas valide ";
//      }
//       if (!$password){
//         $errors['password']="merci d'indique un mot de passe";
//     }




// }
require 'index.phtml';
