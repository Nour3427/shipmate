<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php
    include './header.phtml'
    ?>
    <main>
        <div class="form_container">
            <div class=" image form">
                <img src="./images/./register.PNG" alt="">
            </div>
            <div class="login form" id="login">
                <div class="login_container">
                    <h3>Je me connecte</h3>
                    <button class="facebook_button" type="button">
                        <div class="facebook_login">
                            <i class="fa-brands fa-square-facebook"></i>
                            <p>Se connecter avec Facebook</p>
                        </div>

                    </button>
                    <div class="divider_container">
                        <div class="divider"></div>
                        <div class="ou">ou</div>
                        <div class="divider"></div>
                    </div>
                    <div class="login_input ">
                        <input class="email_input " type="text" placeholder=" Adresse e-mail " name="email">
                        <div class="password_container">
                            <input class="password_input" type="password" placeholder=" Mot de passe " name="password">
                            <div class="eye"><button class="password_toggle_button"><i class="fas fa-eye-slash"></i></button></div>
                        </div>
                        <a href="">Mot de passe oublié ?</a>
                        <button class="log_sign_button" type="submit" name='login_submit'>Se connecter</button>
                        <p>Vous n’avez pas encore de compte ?<a href="" id="login_link"> Inscrivez-vous</a></p>

                    </div>
                </div>

            </div>
            <div class="sign_up login form" id="signup">

                <div class="login_container">
                    <h3>Je crée un compte </h3>
                    <button class="facebook_button" type="button">
                        <div class="facebook_login">
                            <i class="fa-brands fa-square-facebook"></i>
                            <p>S'inscrire avec Facebook</p>
                        </div>

                    </button>
                    <div class="divider_container">
                        <div class="divider"></div>
                        <div class="ou">ou</div>
                        <div class="divider"></div>
                    </div>
                    <button class="mail_button" type="button">
                        <div class="facebook_login facebook_singup">
                            <i class="fa-regular fa-envelope"></i>
                            <p>S'inscrire avec une adresse e-mail</p>
                        </div>
                    </button>
                    <div class="signup_input">
                        <p>Saisissez vos informations pour continuer</p>
                        <input type="text" placeholder=" Votre nom " name="lastname">
                        <input type="text" placeholder=" Votre prénom " name="firstname">
                        <input type="text" placeholder=" Votre numéro de téléphone " name="phone_number">
                        <input type="text" placeholder=" Votre adresse e-mail " name="email">
                        <input type="password" placeholder=" Votre mot de passe " name="password">
                        <button class="log_sign_button sign" type="submit" name='signup_submit'>Se connecter</button>
                        <p>Vous avez déjà un compte ?<a href="" id="signup_link"> Connectez-vous</a></p>

                    </div>

                </div>

            </div>

        </div>

    </main>
    <script src="./js/connexion.js"></script>
</body>

</html>