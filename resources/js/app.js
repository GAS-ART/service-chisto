import './bootstrap';

const burgerIcon = document.querySelector('.burger_icon');
const burger = document.querySelector('.burger');

if(burgerIcon && burger){

  burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('active');
    burger.classList.toggle('active');
  });
}
