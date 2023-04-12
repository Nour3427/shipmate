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
    <link rel="stylesheet" href="<?=asset('css/publish_style.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>

    <title>ShipMate</title>
</head>

<body>
    <?php
    include './header.phtml';
    ?>
    <main>
        <div class="publish_container">
            <h3>Proposez une livraison </h3>
            <div class="publish_form">
                <form action="" method="POST">
                    <div class="input_container">

                        <div class="input_content border_input">
                            <label for="date">
                                <i class="fa-regular fa-calendar"></i>
                            </label>
                            <input class="date_input" type="date" id="date" name="date" placeholder="Date d'envoi ">
                        </div>
                        <div class="input_content transport_container">
                            <label for="transport">
                                <i class="fa-solid fa-truck-plane"></i>
                            </label>
                            <select name="transport" id="transport">

                                <option disabled selected>Moyen de transport</option>
                                <option value="voiture">Voiture</option>
                                <option value="avion">Avion</option>
                                <option value="bateau">Bateau</option>

                            </select>

                        </div>
                    </div>
                    <div class="input_container">

                        <div class="input_content border_input city_input_container">
                            <label for="departure">
                                <i class="fa-regular fa-circle-dot"></i>
                            </label>
                            <input type="text" class="city_input" id="departure" name='departure' placeholder="Départ">
                            <!-- div qui contient le résultat de recherche -->
                            <div class="list_container">
                                <ul class="cities_list"></ul>
                            </div>

                        </div>
                        <div class="input_content">
                            <label for="departure_time">
                                <i class="fa-regular fa-clock"></i>
                            </label>
                            <input type="text" class="time" id="departure_time" name='departure_time' placeholder="Heure de départ">

                        </div>


                    </div>
                    <div class="input_container">

                        <div class="input_content border_input city_input_container">
                            <label for="destination">
                                <i class="fa-regular fa-circle-dot"></i>
                            </label>
                            <input type="text" class="city_input" id="destination" name='destination' placeholder="Destination">
                            <!-- div qui contient le résultat de recherche -->
                            <div class="list_container">
                                <ul class="cities_list"></ul>
                            </div>

                        </div>
                        <div class="input_content">
                            <label for="destination_time">
                                <i class="fa-regular fa-clock"></i>
                            </label>
                            <input type="text" class="time" id="destination_time" name='destination_time' placeholder="Heure d'arrivée">

                        </div>


                    </div>
                    <div class="input_container last_input">

                        <div class="input_content border_input">
                            <label for="weight">
                                <i class="fa-solid fa-weight-scale"></i>
                            </label>
                            <input type="number" id="weight" name="weight" placeholder="Poids " min="1" step="1">
                            <span>Kg</span>
                        </div>
                        <div class="input_content ">
                            <label for="price">
                                <i class="fa-solid fa-money-bill-transfer"></i>
                            </label>
                            <input type="number" id="price" name='price' placeholder="Prix" step="0.01">
                            <span>€/kg</span>

                        </div>
                    </div>
                    <button class="publish_button" type="submit" name='publish_submit'>Publier</button>
                </form>

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
        flatpickr(".time", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
    </script>
    <script src="<?=asset('js/geonamesApiAjax.js');?>"></script>
</body>

</html>