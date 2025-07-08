// Script para el Navbar Dinámico
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('main-navbar');
    const header = document.getElementById('main-header');
    // Obtén la altura del header para saber cuándo "salir" de él
    const headerHeight = header.offsetHeight; // Altura total incluyendo padding, border
    const scrollPosition = window.scrollY; // Posición actual del scroll

    console.log(navbar.classList.values())

    const activationThreshold = 50; // Puedes ajustar este valor en píxeles
    if (scrollPosition > activationThreshold) {
        navbar.classList.add('navbar-scrolled');
        navbar.classList.remove('navbar-transparent');
    } else {
        navbar.classList.remove('navbar-scrolled');
        navbar.classList.add('navbar-transparent');
    }
});
