<?php

use App\Model\UserModel;


$UserModel = new UserModel();
if (isset($_SESSION['user_logged_in_id'])) {
    // Si l'utilisateur est déjà connecté, rediriger vers la page d'accueil
    header('Location: ./');
    exit;
}

$errors = [];
$firstname = '';
$lastname = '';
$phone_number = '';
$email = '';
$login_email = '';
$error_message = '';

/* if(isset($_POST['signout_submit'])){
    $loggedUser = $_SESSION['user_logged_in'];
    unset($_SESSION['user_logged_in']);
    unset($_SESSION['user_logged_in_name']);
} */

if (isset($_POST['signup_submit'])) {
    $firstname = dataSecure($_POST['firstname']);
    $lastname = dataSecure($_POST['lastname']);
    $phone_number = dataSecure($_POST['phone_number']);
    $email = dataSecure($_POST['email']);
    $password = trim($_POST['password']);

    // Si le champ "firstname" n'est pas rempli...
    if (!$firstname) {
        $errors['firstname'] = "Veuillez d'indiquer un prénom";
    }

    if (!$lastname) {
        $errors['lastname'] = "Veuillez d'indiquer un nom";
    }

    if (!$phone_number) {
        $errors['phone_number'] = "Veuillez d'indiquer un numero de téléphone";
    } else {
        $pattern = '/^(0|\+33)[1-9]( ?\d{2}){4}$/';
        if (!preg_match($pattern, $phone_number)) {
            $errors['phone_number'] = 'Le format du numéro de téléphone est invalide.';
        }
    }



    // Validation de l'email
    if (!$email) {
        $errors['email'] = 'Veuillez remplir le champ "Email"';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Veuillez remplir un email valide';
    } elseif ($UserModel->isEmailExists($email)) {
        $errors['email'] = 'Un compte existe déjà avec cet email';
    }

    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@.#$%^&*()_+-=])[A-Za-z\d!@.#$%^&*()_+-=]{8,}$/', $password)) {
        $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre et un chiffre.';
    }

    if (empty($errors)) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $UserModel->addUser($firstname, $lastname, $email, $hashed_password, $phone_number);
        $_SESSION['successfully_created']='Votre compte a été bien créé';
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    }
}
if (isset($_POST['login_submit'])) {
    $login_email = dataSecure($_POST['login_email']);
    $login_password = trim($_POST['login_password']);

    if (empty($login_email) || empty($login_password)) {
        $error_message = 'Veuillez remplir tous les champs';
    } else {
        $user = $UserModel->verifyLogin($login_email, $login_password);
       
        if ($user == null) {
            $error_message = 'Email ou mot de passe incorrect';
        } else {
            $_SESSION['user_logged_in_id'] = $user->getIdUser();
            $_SESSION['user_logged_in_name'] = $user->getFirstname();
            $_SESSION['user_role'] = $user->getRole();
            header("Location: ./");
            exit();
        }
    }
}

if (isset($_POST['signup_submit'])) {
    // If the signup form was submitted, then the 'show_signup' session variable is set to true.
    //  Otherwise, it is set to false.
    $_SESSION['show_signup'] = true;
} else {
    $_SESSION['show_signup'] = false;
}
// If 'show_signup' is true, the 'login' div is hidden and the 'signup' div is displayed.
$template='login';
include './templates/base.phtml';
