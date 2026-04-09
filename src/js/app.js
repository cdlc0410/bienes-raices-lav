document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.menu__bar');

    mobileMenu.addEventListener('click', navResponsive);
}

function navResponsive() {
    const nav = document.querySelector('.navbar');

    nav.classList.toggle('expand');
}