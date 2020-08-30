const menlogo = document.querySelector('.menlogo');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');


menlogo.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    links.forEach(link => {
        link.classList.toggle("fade");
    });
});