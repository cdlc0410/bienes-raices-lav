document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.menu__bar');

    mobileMenu.addEventListener('click', navResponsive);
}

function navResponsive() {
    const nav = document.querySelector('.navbar');

    nav.classList.toggle('expand');
}

function darkMode() {
    const btnDarkMode = document.querySelector('.dark-mode-boton');

    btnDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode')
    });
}