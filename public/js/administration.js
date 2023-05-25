
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
var liens = document.querySelectorAll('.a');

function afficherDivAncre(ancre) {
    var divs = document.querySelectorAll('.pricipal_divs'); // Sélectionner tous les divs à masquer
  
    // Parcourir les divs et les masquer sauf celui correspondant à l'ancre
    divs.forEach(function(div) {
      if (div.id === ancre) {
        div.style.display = 'block'; // Afficher le div correspondant à l'ancre
      } else {
        div.style.display = 'none'; // Masquer les autres divs
      }
    });
  }

  
liens.forEach(function(lien) {

  lien.addEventListener('click', function(event) {
    event.preventDefault();
    
    var ancre = this.getAttribute('href').substring(1);
    if (ancre) {
      window.location.hash = ancre;
      afficherDivAncre(ancre);
      
      // Ajouter la classe "active" au div parent du lien actuel
      var divParent = this.parentNode;
      divParent.classList.add('active');
      
      // Supprimer la classe "active" des divs parents des autres liens
      liens.forEach(function(l) {
        if (l !== lien) {
          l.parentNode.classList.remove('active');
        }
      });
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  var ancre = window.location.hash.substring(1);
  if (ancre) {
    document.querySelector('.a[href="#' + ancre + '"]').parentNode.classList.add('active');
    afficherDivAncre(ancre);
  }
});


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
 