
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
    <link rel="stylesheet" href="<?=asset('css/search_style.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

    <title>ShipMate</title>
</head>

<body>
    <?php
    include './header.phtml'
    ?>
    <main>
        <div class="search_container">
            <h3>Trouver votre livreur </h3>
            <div class="search_form">
                <form action="" method="POST">
                    <div class="input_container city_input_container">
                        <label for="departure">
                            <i class="fa-regular fa-circle-dot"></i>
                        </label>
                        <input type="text" class='city_input' id="departure" name='departure' placeholder="Départ">
                        <!-- div qui contient le résultat de recherche -->
                        <div class="list_container">
                            <ul class="cities_list"></ul>
                        </div>

                    </div>
                    <div class="input_container city_input_container">
                        <label for="destination">
                            <i class="fa-regular fa-circle-dot"></i>
                        </label>
                        <input type="" class='city_input' id="destination" name='destination' placeholder="Destination">
                        <!-- div qui contient le résultat de recherche -->
                        <div class="list_container">
                            <ul class="cities_list"></ul>
                        </div>
                    </div>
                    <div class="input_container date_weight">
                        <div class="date_input_container">
                            <label for="date">
                                <i class="fa-regular fa-calendar"></i>
                            </label>
                            <input class="date_input" type="date" id="date" name="date" placeholder="Date d'envoi ">
                        </div>
                        <div class="weight_input">
                            <label for="weight">
                                <i class="fa-solid fa-weight-scale"></i>
                            </label>
                            <input type="number" id="weight" name="weight" placeholder="Poids " min="1" step="1">
                            <span>Kg</span>
                        </div>
                    </div>
                    <div class="input_container_button">
                        <button id="search_button" type="submit" name="search">Rechercher</button>
                    </div>
                </form>
            </div>
            <div class="result_container">

                <?php
                $transport = 'bateau';
                if (isset($_POST['search'])) {
                    $results = ["a", "b", "c"];
                    if (count($results) == 0) { ?>
                        <div class="no_result">
                            <h3> Aucun résultat trouvé</h3>
                        </div>
                    <?php } else { ?>
                        <div class="search_results">
                            <span class="delivery_date">5 Mai 2023</span>
                            <?php foreach ($results as $result) { ?>

                                <div class="delivery_container">
                                    <div class="user_details">
                                        <div class="user_name">
                                            <div class="user_icon">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <span>Zack</span>
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



                            <?php   } ?>
                        </div>
                <?php  }
                } ?>




            </div>






        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    <script>
        flatpickr("#date", {
            // Initialiser Flatpickr avec la langue française
            "locale": "fr",
            minDate: "today",
            altInput: true,
            altFormat: " j F Y",

        });
    </script>
    <script src="<?=asset('js/geonamesApiAjax.js');?>"></script>

</body>

</html>