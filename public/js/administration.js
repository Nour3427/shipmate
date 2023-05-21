const users = document.getElementById('users');
const announcements = document.getElementById('announcements');
const requests = document.getElementById('requests');
// const users_details = document.getElementById('users_details');
// const delivery_announcements_details = document.getElementById('delivery_announcements_details');
// const requests_details = document.getElementById('requests_details');
const user_details_link=document.querySelector('a[href="#users_details"]')
const delivery_announcements_details_link=document.querySelector('a[href="#delivery_announcements_details"]')
const requests_details_link=document.querySelector('a[href="#requests_details"]')
const user_details=document.getElementById('users_details')
const delivery_announcements_details=document.getElementById('delivery_announcements_details')
const requests_details=document.getElementById('requests_details')

const action = document.querySelectorAll('.action');
const delete_user_popup = document.querySelector('.delete_user_popup');
const background = document.querySelector('.background');
const cancel_delete = document.querySelector('.cancel_delete');
const delete_user = document.querySelectorAll('.delete');
let id_user = document.getElementById('id_user');
const delivery_delete = document.querySelectorAll('.delivery_delete');
const delete_delivery_popup = document.querySelector('.delete_delivery_popup');
let id_delivery = document.getElementById('id_delivery');
const delivery_cancel_delete = document.querySelector('.delivery_cancel_delete');
const request_delete = document.querySelectorAll('.request_delete');
const delete_request_popup = document.querySelector('.delete_request_popup');
let id_request= document.getElementById('id_request');
const request_cancel_delete = document.querySelector('.request_cancel_delete');


// Fonction pour afficher le div correspondant à l'ancre dans l'URL et masquer les autres divs
function afficherDivAncre(ancre) {
    var divs = document.querySelectorAll('.an'); // Sélectionner tous les divs à masquer
  
    // Parcourir les divs et les masquer sauf celui correspondant à l'ancre
    divs.forEach(function(div) {
      if (div.id === ancre) {
        div.style.display = 'block'; // Afficher le div correspondant à l'ancre
      } else {
        div.style.display = 'none'; // Masquer les autres divs
      }
    });
  }
  
  // Sélectionnez tous les liens que vous souhaitez surveiller
  var liens = document.querySelectorAll('.a');
  
  // Parcourez les liens et ajoutez un écouteur d'événement click à chacun
  liens.forEach(function(lien) {
    lien.addEventListener('click', function(event) {
      event.preventDefault(); // Empêcher le comportement de lien par défaut
      
  
      var ancre = this.getAttribute('href').substring(1); // Récupérer l'ancre du lien sans le symbole dièse (#)
      if (ancre) {
        window.location.hash = ancre; // Définir l'ancre dans l'URL
        afficherDivAncre(ancre); // Afficher le div correspondant à l'ancre
      }
    });
  });
document.addEventListener('DOMContentLoaded', function() {
    var ancre = window.location.hash.substring(1); // Récupérer l'ancre de l'URL sans le symbole dièse (#)
    if (ancre) {
      afficherDivAncre(ancre); // Afficher le div correspondant à l'ancre initiale
    }
  });
  
//   Événement de chargement initial pour afficher le div correspondant à l'ancre initiale
//   window.addEventListener('load', function() {
//     var ancre = window.location.hash.substring(1); // Récupérer l'ancre de l'URL sans le symbole dièse (#)
//     if (ancre) {
//       afficherDivAncre(ancre); // Afficher le div correspondant à l'ancre initiale
//     }
//   });




// user_details_link.addEventListener('click', function(event) {
//     user_details.style.display = 'block';
//     delivery_announcements_details.style.display = 'none';
//     requests_details.style.display = 'none';
//     announcements.classList.remove('clickStyle');
//     requests.classList.remove('clickStyle');
//     users.classList.add('clickStyle');
//     // var currentAnchor = window.location.hash;

//     // // Afficher l'ancre dans la console
//     // console.log(currentAnchor);
//   });


//   delivery_announcements_details_link.addEventListener('click', function(event) {

//     delivery_announcements_details.style.display = 'block';
//     requests_details.style.display = 'none';
//     user_details.style.display = 'none';
//     users.classList.remove('clickStyle');
//     requests.classList.remove('clickStyle');
//     announcements.classList.add('clickStyle');
//     // var currentAnchor = window.location.hash;

//     // // Afficher l'ancre dans la console
//     // console.log(currentAnchor);

//   });
//   requests_details_link.addEventListener('click', function(event) {
//     delivery_announcements_details.style.display = 'none';
//     requests_details.style.display = 'block';
//     user_details.style.display = 'none';
//     announcements.classList.remove('clickStyle');
//     users.classList.remove('clickStyle');
//     requests.classList.add('clickStyle');
//     // var currentAnchor = window.location.hash;

//     // // Afficher l'ancre dans la console
//     // console.log(currentAnchor);
    

//   });


for (let i = 0; i < delete_user.length; i++) {
    delete_user[i].addEventListener('click', function () {
        let idUser = delete_user[i].getAttribute('data_idUser');
        id_user.value = idUser;

        delete_user_popup.style.display = 'flex';
        background.style.display = 'flex';
    })
    window.addEventListener('click', function (e) {
        if (e.target == background || e.target == cancel_delete) {
            background.style.display = "none";
            delete_user_popup.style.display = "none";
        }
    });
}
for (let i = 0; i < delivery_delete.length; i++) {
    delivery_delete[i].addEventListener('click', function () {
        let idDelivery = delivery_delete[i].getAttribute('data_idDelivery');
        id_delivery.value = idDelivery;

        delete_delivery_popup.style.display = 'flex';
        background.style.display = 'flex';
    })
    window.addEventListener('click', function (e) {
        if (e.target == background || e.target == delivery_cancel_delete) {
            background.style.display = "none";
            delete_delivery_popup.style.display = "none";
        }
    });
}
for (let i = 0; i < request_delete.length; i++) {
    request_delete[i].addEventListener('click', function () {
        let idRequest = request_delete[i].getAttribute('data_idRequest');
        id_request.value = idRequest;

        delete_request_popup.style.display = 'flex';
        background.style.display = 'flex';
    })
    window.addEventListener('click', function (e) {
        if (e.target == background || e.target == request_cancel_delete) {
            background.style.display = "none";
            delete_request_popup.style.display = "none";
        }
    });

}
