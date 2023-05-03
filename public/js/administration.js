const users = document.getElementById('users');
const announcements = document.getElementById('announcements');
const requests = document.getElementById('requests');
const users_details = document.getElementById('users_details');
const delivery_announcements_details = document.getElementById('delivery_announcements_details');
const requests_details = document.getElementById('requests_details');
const user_delete = document.querySelectorAll('.user_delete');


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
function confirmDelete() {
    return confirm("Voulez-vous vraiment supprimer cet utilisateur ?");
}