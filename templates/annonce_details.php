<?php require '../app/config.php';
require '../lib/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= asset('css/annonce_details_style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ShipMate</title>
</head>

<body>
    <?php
    include './header.phtml'
    ?>
    <main>
        <div class="annonce_details_container">
            <span class="delivery_date">5 Mai 2023</span>
            <div class="delivery_container announcement_delivery hover_div">

                <div class="delivery_conten">

                    <!-- <div class="user_details">
                    <div class="user_name">
                        <span class="delivery_date">5 Mai 2023</span>
                    </div>
                    <div class="price_per_kg">
                        <span>4 €/Kg</span>
                    </div>
                </div> -->
                    <div class="delivery_details">
                        <div class="depart">
                            <span>Marseille</span>
                            <span>13:00</span>
                        </div>
                        <div class="line">
                            <div class="left_line"></div>
                            <div class="transport">
                                <?php
                                $transport = 'voiture';
                                if ($transport == 'avion') { ?>
                                    <i class="fa-solid fa-jet-fighter-up fa-rotate-90"></i>
                                <?php } elseif ($transport == 'bateau') { ?>
                                    <i class="fa-solid fa-ferry"></i>
                                <?php } elseif ($transport == 'voiture') { ?>
                                    <i class="fa-solid fa-car-side"></i>
                                <?php } ?>




                            </div>
                            <div class="right_line"></div>
                        </div>
                        <div class="dest">
                            <span>oran</span>
                            <span>17:20</span>
                        </div>
                    </div>
                </div>
                    <div class="weight_price">
                        <div class="max_weight_price left">
                            <p class="weight_price_title">Poids maximal</p>
                            <p> 3 Kg</p>

                        </div>
                        <div class="max_weight_price right">
                            <p class="weight_price_title">Prix</p>
                            <p> 3.50 €/Kg</p>
                        </div>
                    </div>
                <div class="user_name">
                    <div class="user_icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <span>Zack</span>
                </div>
                <form id="form" action="" method="post">
                    <input type="hidden" name="id_commande" value="1"> <!-- Remplacez "1" par votre propre ID de commande -->
                    <input type="submit" id="accepter" name="accept" value="Envoyer une demande de livraison ">
                </form>


            </div>
    </main>