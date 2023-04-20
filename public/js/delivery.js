const informations=document.querySelector('.informations');
const announcement=document.querySelector('.announcement');
const request=document.querySelector('.request');
const informations_details=document.querySelector('.informations_details');
const announcement_details=document.querySelector('.announcement_details');
const request_details_container=document.querySelector('.request_details_container');
const announcement_delivery=document.querySelectorAll('.announcement_delivery');
const delivery_requests=document.querySelectorAll('.delivery_requests');
const message_flash=document.querySelector('.message_flash');

setTimeout(() => {
  message_flash.style.display='none';
},3000);





for(let i=0; i<announcement_delivery.length;i++){
informations.addEventListener('click',function(){
    this.style.borderBottom='2px solid black';
    announcement.style.borderBottom='none';
    request.style.borderBottom='none';
    informations_details.style.display='block';
    announcement_details.style.display='none';
    request_details_container.style.display='none';
    delivery_requests[i].style.display='none';
})
announcement.addEventListener('click',function(){
    this.style.borderBottom='2px solid black';
    informations.style.borderBottom='none';
    request.style.borderBottom='none';
    informations_details.style.display='none';
    announcement_details.style.display='block';
    request_details_container.style.display='none';
})
request.addEventListener('click',function(){
    this.style.borderBottom='2px solid black';
    informations.style.borderBottom='none';
    announcement.style.borderBottom='none';
    informations_details.style.display='none';
    announcement_details.style.display='none';
    request_details_container.style.display='block';
    delivery_requests[i].style.display='none';
})


    announcement_delivery[i].addEventListener('click',function(){
        delivery_requests[i].style.display='block';
        this.classList.remove('hover_div');
    })
}



const statuss = document.querySelector('.statuss');

const form = document.getElementById('form');
const response = document.getElementById('response');

// Ajouter un gestionnaire d'événement sur la soumission du formulaire
form.addEventListener('submit', function(event) {
  // Empêcher le rechargement de la page par défaut
  event.preventDefault();

  // Récupérer les données du formulaire
  const formData = new FormData(form);

  // Envoyer les données du formulaire via AJAX
  fetch('', {
    method: 'POST',
    body: formData
  })
  .then(data => {
    // Afficher la réponse du serveur
    response.innerHTML = data;
    
    console.log('nour');
    statuss.innerHTML = '<i class="fa-regular fa-circle-check" style="color: #17a139;"></i>';
  })
  .catch(error => {
    console.error(error);
    
  });
});


