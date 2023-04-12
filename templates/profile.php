<?php require '../app/config.php';
require '../lib/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset('css/style.css');?>">
    <link rel="stylesheet" href="<?=asset('css/profile_style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ShipMate</title>
</head>

<body>
    <?php
    include './header.phtml';
    ?>
    <main>
        <div class="profile_container">
            <h3>Bienvenue Nour,</h3>
            <div class="profile_details_container">
                <div class="titles">
                    <div class="informations">
                        <p>Informations personelles</p>
                    </div>
                    <div class="announcement">
                        <p>Annonces</p>
                    </div>
                    <div class="request">
                        <p>Livraisons</p>
                    </div>
                </div>

                <!-- /////////////////////////////////////////////////////////////////////
           le section dES INFORMATIONS PERSONNELLES
        /////////////////////////////////////////////////////////////////// -->
                <div class="informations_details">
                    <form>
                        <div class="firstname">
                            <label for="firstname">Prénom</label>
                            <input type="text" id='firstname' name='firstname' value="Nour">

                        </div>
                        <div class="lastname">
                            <label for="lastname">Nom</label>
                            <input type="text" id='lastname' name='lastname' value="Ferraoun">

                        </div>
                        <div class="number_phone">
                            <label for="number_phone">Numéro de téléphone</label>
                            <input type="number" id='number_phone' name='number_phone' value="07465690">

                        </div>
                        <div class="email">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" id='email' name='email' value="ferraoun.nour@gmail.com">

                        </div>
                        <div class="password">
                            <label for="password">Mot de passe</label>
                            <input type="password" id='password' name='password'>

                        </div>
                        <div class="password">
                            <label for="new_password">Nouveau mot de passe</label>
                            <input type="password" id='new_password' name='new_password'>
                        </div>
                        <button class="modify_button" type="submit" name='modify_submit'>Modifier mes informations</button>


                    </form>

                </div>

                <!-- /////////////////////////////////////////////////////////////////////
                       le section des annonces
                /////////////////////////////////////////////////////////////////// -->

                <div class="announcement_details">
                    <h4>Mes annonces</h4>
                    <?php
                    $transport = 'bateau';
                    $results = ["a","b"];
                    if (count($results) == 0) { ?>
                        <div class="no_result">
                            <h3>Vous n'avez aucune annonce</h3>
                        </div>
                    <?php } else { ?>
                        <div class="search_results">

                            <?php foreach ($results as $result) { ?>

                                <div class="delivery_container announcement_delivery hover_div">
                                    <div class="delivery_conten">

                                        <div class="user_details">
                                            <div class="user_name">
                                                <span class="delivery_date">5 Mai 2023</span>
                                            </div>
                                            <div class="price_per_kg">
                                                <span>4 €/Kg</span>
                                            </div>
                                        </div>
                                        <div class="delivery_details">
                                            <div class="depart">
                                                <span>Marseille</span>
                                                <span>13:00</span>
                                            </div>
                                            <div class="line">
                                                <div class="left_line"></div>
                                                <div class="transport">
                                                    <?php
                                                    if ($transport == 'avion') { ?>
                                                        <i class="fa-solid fa-jet-fighter-up fa-rotate-90"></i>
                                                    <?php } elseif ($transport == 'bateau') { ?>
                                                        <i class="fa-solid fa-ferry"></i>
                                                    <?php } elseif ($transport == 'voiture') { ?>
                                                        <i class="fa-solid fa-car-side"></i>
                                                    <?php } ?>



                                                    <p>Max: 8 Kg</p>
                                                </div>
                                                <div class="right_line"></div>
                                            </div>
                                            <div class="dest">
                                                <span>oran</span>
                                                <span>17:20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="requests_container delivery_requests">
                                        <?php $requests = ["a","b"];
                                        if (count($requests) == 0) { ?>
                                            <div class="no_result">
                                                <h3>Aucune demande pour cette annonce</h3>
                                            </div>
                                        <?php } else { ?>
                                            <div class="requests_list">
                                                <div class="titles_list">
                                                    <div class="name_list">
                                                        <p>Prénom</p>
                                                    </div>
                                                    <div class="weight_list">
                                                        <p>Poids</p>
                                                    </div>
                                                    <div class="status_list">
                                                        <p>Status</p>
                                                    </div>
                                                </div>

                                                <?php
                                                $status = 'NON ACCEPTE';
                                                foreach ($requests as $request) { ?>
                                                    <div class="request_details">

                                                        <div class="request_user">
                                                            <div class="user_name">
                                                                <div class="user_icon">
                                                                    <i class="fa-solid fa-user"></i>
                                                                </div>
                                                                <span>Zack</span>
                                                            </div>
                                                        </div>
                                                        <div class="request_user">
                                                            <span>4 Kg</span>
                                                        </div>
                                                        <div class="request_user statuss" id="statuss">
                                                            <?php if ($status == 'accepté') { ?>
                                                                <i class="fa-regular fa-circle-check" style="color: #17a139;"></i>
                                                            <?php } else { ?>

                                                                <form id="form" action="" method="post">
                                                                    <input type="hidden" name="id_commande" value="1"> <!-- Remplacez "1" par votre propre ID de commande -->
                                                                    <input type="submit" id="accepter" name="accept" value="Accepter">
                                                                </form>
                                                                <div id="response"></div>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php   } ?>
                        </div>
                    <?php  }
                    ?>
                </div>

                <div class="request_details_container">
                    <h4>Mes livraisons</h4>
                    <?php
                    $status=null;
                    $transport = 'avion';
                    $results = ["a","n"];
                    if (count($results) == 0) { ?>
                        <div class="no_result">
                            <h3>Vous n'avez aucune livraison</h3>
                        </div>
                    <?php } else { ?>
                        <div class="search_results">

                            <?php foreach ($results as $result) { ?>

                                <div class="delivery_container">
                                    <div class="delivery_conten">

                                        <div class="user_details">
                                            <div class="user_name">
                                            <div class="user_icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <span>Zack</span>
                                            </div>
                                            <div class="delivery_date">
                                                <span class="delivery_date">5 Mai 2023</span>
                                            </div>
                                            <div class="price_per_kg">
                                                <span>4 €/Kg</span>
                                            </div>
                                        </div>
                                        <div class="delivery_details">
                                            <div class="depart">
                                                <span>Marseille</span>
                                                <span>13:00</span>
                                            </div>
                                            <div class="line">
                                                <div class="left_line"></div>
                                                <div class="transport">
                                                    <?php
                                                    if ($transport == 'avion') { ?>
                                                        <i class="fa-solid fa-jet-fighter-up fa-rotate-90"></i>
                                                    <?php } elseif ($transport == 'bateau') { ?>
                                                        <i class="fa-solid fa-ferry"></i>
                                                    <?php } elseif ($transport == 'voiture') { ?>
                                                        <i class="fa-solid fa-car-side"></i>
                                                    <?php } ?>



                                                    <p>Max: 8 Kg</p>
                                                </div>
                                                <div class="right_line"></div>
                                            </div>
                                            <div class="dest">
                                                <span>oran</span>
                                                <span>17:20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="requests_container st">
                                       <?php if($status==('accepté')){?>
                                        <i class="fa-solid fa-circle" style="color: #3dbf0d;"></i>
                                        <span class="font-cirle">Acceptée</span>
                                        <?php } else {?>
                                            <i class="fa-solid fa-circle" style="color: #f4ac48;"></i>
                                            <span class="font-cirle">En attente</span>
                                            
                                            
                                       <?php }?>
                                    </div>
                                </div>
                            <?php   } ?>
                        </div>
                    <?php  }
                    ?>


                </div>
            </div>
        </div>
    </main>
    <script src="<?=asset('js/delivery.js');?>"></script>
</body>

</html>