const btn = document.querySelector('.menu_button');
const navA = document.querySelector('.nav_a');

btn.addEventListener('click',() => {
    navA.classList.toggle('show')
})