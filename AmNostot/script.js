const hamburger = document.getElementById('hamburger');
const navUl = document.getElementById('menu');
hamburger.addEventListener('click', () =>{
    navUl.classList.toggle('show');
});