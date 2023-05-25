const informations=document.querySelector('.informations');
const announcement=document.querySelector('.announcement');
const request=document.querySelector('.request');
const informations_details=document.querySelector('.informations_details');
const announcement_details=document.querySelector('.announcement_details');
const request_details_container=document.querySelector('.request_details_container');
const announcement_delivery=document.querySelectorAll('.announcement_delivery');
const delivery_requests=document.querySelectorAll('.delivery_requests');
const message_flash=document.querySelector('.message_flash');
if(message_flash){
setTimeout(() => {
  message_flash.style.display='none';
},3000);
}





// for(let i=0; i<announcement_delivery.length;i++){
informations.addEventListener('click',function(){
    this.style.borderBottom='2px solid black';
    announcement.style.borderBottom='none';
    request.style.borderBottom='none';
    informations_details.style.display='block';
    announcement_details.style.display='none';
    request_details_container.style.display='none';
    // delivery_requests[i].style.display='none';
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
    // delivery_requests[i].style.display='none';
})

  // FONCTIONS
async function onSubmitForm(event)
{
    // Stopper la soumission du formulaire
    event.preventDefault();

    // Récupérer les données du formulaire
    const form = event.currentTarget;
    var formparent = form.parentNode;
    const formData = new FormData(form);

    // Envoi des données au serveur
    const options = {
        method: 'POST',
        body: formData
    };
    
    const url = form.dataset.ajaxurl;

    const response = await fetch(url, options);
    const data = await response.json();

    form.remove();
// Créer l'élément <p> avec le texte "Demande acceptée"
    const spanElement = document.createElement('span');
    spanElement.innerHTML = '<i class="fa-regular fa-circle-check" style="color: #17a139;" title="Demande acceptée"></i>';
  
    // Insérer l'élément <p> à l'intérieur du parent
    formparent.appendChild(spanElement);



    }



// CODE PRINCIPAL
form=document.querySelectorAll('.request_form');
for(let i=0; i<form.length; i++){
form[i].addEventListener('submit', onSubmitForm);
}
  




