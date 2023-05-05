const users = document.getElementById('users');
const announcements = document.getElementById('announcements');
const requests = document.getElementById('requests');
const users_details = document.getElementById('users_details');
const delivery_announcements_details = document.getElementById('delivery_announcements_details');
const requests_details = document.getElementById('requests_details');
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




announcements.addEventListener('click', function () {
    delivery_announcements_details.style.display = 'block';
    users_details.style.display = 'none';
    users.classList.remove('clickStyle');
    requests.classList.remove('clickStyle');
    this.classList.add('clickStyle');
    requests_details.style.display = 'none';

})
requests.addEventListener('click', function () {
    users_details.style.display = 'none';
    announcements.classList.remove('clickStyle');
    users.classList.remove('clickStyle');
    requests.classList.add('clickStyle');
    requests_details.style.display = 'block';
    delivery_announcements_details.style.display = 'none';
})
users.addEventListener('click', function () {
    users_details.style.display = 'block';
    announcements.classList.remove('clickStyle');
    requests.classList.remove('clickStyle');
    this.classList.add('clickStyle');
    requests_details.style.display = 'none';
    delivery_announcements_details.style.display = 'none';
})
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

