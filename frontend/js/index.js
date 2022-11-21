const homebutton = document.getElementById('homeButton');
const servicesButton = document.getElementById('servicesButton');
const page = document.querySelector('.page').value;

if(page === 'Home'){
    homebutton.classList.add('pageActive')
    servicesButton.classList.remove('pageActive')
}
if(page === 'Services'){
    servicesButton.classList.add('pageActive')
    homebutton.classList.remove('pageActive')
}