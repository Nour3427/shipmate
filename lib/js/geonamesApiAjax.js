const city_input = document.querySelectorAll('.city_input');
const list_container = document.querySelectorAll('.list_container');
const cities_list = document.querySelectorAll('.cities_list');
const endpoint = "http://api.geonames.org/searchJSON?";
const username = "nourtest34";


for (let i = 0; i < city_input.length; i++) {
    document.addEventListener("click", (event) => {
        // si l'élément cliqué n'est pas l'input ni la liste de résultats
        if (event.target !== city_input[i] && event.target !== list_container[i]) {
            // masquer la liste de résultats
            list_container[i].style.display = "none";

        }
    });



    city_input[i].addEventListener('input', function () {
        //  le code à exécuter lorsque l'événement input se produit

        // recuperation la valeur de l'input 
        const query = city_input[i].value;

        if (query == "") {
            list_container[i].style.display = "none";
        } else {
            list_container[i].style.display = "block"
            // appelle api geonames pour chaque input detecté
            const url = `${endpoint}name_startsWith=${query}&maxRows=6&username=${username}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    // après chaque appelle on efface le resultat precedent dans notre liste
                    cities_list[i].innerHTML = "";

                    const city_informations = data.geonames;

                    // on utilise la méthode uniqBy de lodash pour filtrer les doublons du résultat de l'API  par countryCode
                    const filteredResults = _.uniqBy(city_informations, 'countryCode');
                    console.log(filteredResults);
                    // si aucune ville n'a été trouvée ,on cache la liste 

                    if ((filteredResults.length === 0)) {

                        list_container[i].style.display = 'none';
                    } else {
                        filteredResults.forEach(result => {

                            //sinon on crée une div (qui contient deux li pour le nom de la ville et le pays) dans la liste ul 

                            const div = document.createElement("div");
                            div.classList.add("li_container");
                            const listItem = document.createElement("li");
                            const country = document.createElement("li");
                            country.classList.add("countryName");
                            listItem.textContent = result.name;
                            country.textContent = result.countryName;
                            cities_list[i].appendChild(div);
                            div.appendChild(listItem);
                            div.appendChild(country);

                            div.addEventListener("click", () => {
                                // l'element selectionné est la valeur de l'input 
                                city_input[i].value = listItem.textContent;

                                // on cache la liste 
                                list_container[i].style.display = "none";
                            })

                        });
                    }
                })
        }

    })
}

const weight = document.getElementById('weight');// Récupération du champ de saisie
weight.addEventListener("keydown", function (event) {
    if (event.key === "." || event.key === "+" || event.key === "e" || event.key === "E") {
        event.preventDefault();
    }
});
