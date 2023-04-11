<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ShipMate</title>
</head>

<body>
<?php 
include './header.phtml'
?>
    <main>
        <section class="banner">
            <div class="home_image">
                <img src="./images/banner.png" alt="banner">
            </div>
        </section>
        <section class="introduction">
            <div class="shipmate_intro">
                <div class="text">
                    <h1 class="intro_title">Ship<span class="m">M</span>ate, la livraison de colis autrement</h1>
                    <p class="definition">ShipMate vous offre la possibilité de livrer des colis en toute simplicité entre particuliers. Nous transformons les déplacements quotidiens en occasions pour acheminer des colis en toute sécurité et réduire les coûts de livraison. Rejoignez notre communauté de livreurs occasionnels pour faire la différence dans la vie des gens et gagner de l'argent.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="shipmate_details">
                <div class="shipmate_details_container">
                    <div class="shipmate_details_content">
                        <div class="circle_icon details">
                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>
                        <p class="paragraphs_title">Livraison adaptée, économies astucieuses et déplacement valorisé</p>
                        <p>Envoyer vos colis en toute flexibilité et sérénité avec la livraison entre particuliers peu importe votre destination.
                            Planifiez votre livraison selon vos préférences, économisez de l'argent en comparant les tarifs et profitez d'une rémunération pour chaque kilomètre parcouru avec ShipMate.</p>
                    </div>
                    <div class="shipmate_details_content">
                        <div class="circle_icon details">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <p class="paragraphs_title">Livrez en toute sécurité</p>
                        <p>Nous mettons la sécurité de nos clients en premier en vérifiant les antécédents de nos conducteurs. Nous examinons les commentaires, les profils et les pièces d'identité pour vous offrir une expérience de livraison en toute confiance sur notre plateforme sécurisée.</p>
                    </div>
                    <div class="shipmate_details_content">
                        <div class="circle_icon details">
                            <i class="fa-regular fa-hand-pointer"></i>
                        </div>
                        <p class="paragraphs_title">Recherchez, sélectionnez et livrez !</p>
                        <p>Grâce à notre interface conviviale, réserver une livraison n'a jamais été aussi simple. Recherchez, sélectionnez et réservez une livraison près de chez vous en un clic.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="indications">
            <div class="indications_container">
                <div class="world_image content">
                    <img src="./images/delivery.jpg" alt="">
                </div>
                <div class=" content">
                    <div class="how_doesit_work">
                        <h1>Envoyer avec Ship<span class="m">M</span>ate, </h2>
                            <h2> Comment ça marche ? </h2>
                            <p>Vous êtes à la recherche d'un moyen rapide et facile d'envoyer vos colis ? ShipMate est la solution idéale pour vous ! Nous vous offrons une plateforme de livraison de colis entre particuliers qui vous permet de :</p>
                            <div class="services">
                                <i class="fa-regular fa-pen-to-square fa"></i>
                                <div class="service_description des">
                                    <h4>Créer vos annonces</h4>
                                    <p>Créez et gérez facilement vos annonces pour proposer une livraison ou trouver le livreur pour votre envoi en quelques clics. </p>

                                </div>
                            </div>
                            <div class="services">
                                <i class="fa-solid fa-location-dot fa"></i>
                                <div class="service_description des">
                                    <h4>Définir vos zones de livraison</h4>
                                    <p>Sélectionnez les villes où vous êtes prêt à transporter des colis pour maximiser vos opportunités de livraison. </p>

                                </div>
                            </div>
                            <div class="services msg">
                                <i class="fa-regular fa-comments msg"></i>
                                <div class="service_description message">
                                    <h4>Communiquer en toute simplicité </h4>
                                    <p>Échangez facilement avec les autres membres pour organiser vos livraisons de colis de manière efficace et sans tracas. </p>

                                </div>
                            </div>
                    </div>

                </div>
            </div>

        </section>
        <section>
            <div class="shipmate_member_container">
                <div class="shipmate_member_content">
                    <h1 class="intro_title">Soyez un membre de Ship<span class="m">M</span>ate!</h1>
                    <p class="definition">En devenant membre, vous pourrez économiser de l'argent, aider la communauté et participer à une démarche respectueuse de l'environnement.</p>
                    <div class="red_banner_container">
                        <div class="red_banner_content">
                            <img src="./images/paper-plane-3.png" alt="">
                            <div class="red_banner_description service_description">
                                <h4>Quand vous expédiez</h4>
                                <p>Payez vos envois moins chers</p>
                                <p>Expédiez vos colis de manière écologique.</p>
                            </div>
                        </div>
                        <div class="red_banner_content">
                            <img src="./images/delivery-icon.png" alt="">
                            <div class="red_banner_description service_description">
                                <h4>Quand vous livrez</h4>
                                <p>Remboursez vos frais de route.</p>
                                <p>Faites profiter vos trajets à d’autres membres.</p>
                            </div>

                        </div>
                    </div>
                    <button type="button">M'inscrire</button>


                </div>

                <div class="member_img">
                    <img src="./images/shipm.png" alt="">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="social_media_container">
            <div class="social_media"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="social_media"><i class="fa-brands fa-instagram"></i></div>
            <div class="social_media"><i class="fa-brands fa-twitter"></i></div>
            <div class="social_media"><i class="fa-brands fa-linkedin-in"></i></div>

        </div>
        <div class="copyright">
            <p> ShipMate copyright © 2023 SIMPLON.CO</p>
        </div>
    </footer>

</body>

</html>