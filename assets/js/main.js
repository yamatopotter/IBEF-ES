
const mainMenu = document.getElementById('main-menu');
const logoMenu = document.getElementById('logo-header');

document.addEventListener("scroll", function() {
    if (window.pageYOffset > 165) {
        logoMenu.classList.add('fixed-menu')
        mainMenu.classList.add("fixed-menu");
    }
    if (window.pageYOffset < 165) {
        logoMenu.classList.remove('fixed-menu')
        mainMenu.classList.remove("fixed-menu");
    }
});
