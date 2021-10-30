let btn = document.querySelector('.menu_button');
let navA = document.querySelector('.nav_a');

btn.addEventListener('click',() => {
    navA.classList.toggle('show')
})


for (i = 0; i < navA.children.length; i++) {
    navA.children[i].addEventListener('click',() => {
        navA.classList.remove('show')
    }) 
}