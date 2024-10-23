// Toggling the search form
const searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
};

//Toggling the profile form
const profileForm =document.querySelector('.profile-form');
document.querySelector('#user-btn').onclick = () => {
    profileForm.classList.toggle('active');
};

//Toggling the cart form
const cartForm = document.querySelector('.cart-form');
document.querySelector('#cart-btn').onclick = () => {
    cartForm.classList.toggle('active');
};