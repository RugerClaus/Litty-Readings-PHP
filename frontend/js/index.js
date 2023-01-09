const homebutton = document.getElementById('homeButton');
const servicesButton = document.getElementById('servicesButton');
const page = document.querySelector('.page').value;
const more = document.getElementById('more');
const footer = document.querySelector('.footer')

const today = new Date();

const text = `&copy; ${today.getFullYear()} Reina Meza Studios`

footer.innerHTML = text;


if(page === 'Home'){
    homebutton.classList.add('pageActive');
    servicesButton.classList.remove('pageActive');
}
if(page === 'Services'){
    servicesButton.classList.add('pageActive');
    homebutton.classList.remove('pageActive');
}