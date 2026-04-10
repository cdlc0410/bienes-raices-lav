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

    const preferenceMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(preferenceMode.matches);

    if (preferenceMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    preferenceMode.addEventListener('change', () => {
        if (preferenceMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const btnDarkMode = document.querySelector('.dark-mode-boton');

    btnDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode')
    });
}