import './bootstrap';

const HTMLBody = document.querySelector('body')

const burgerIcon = document.querySelector('.burger_icon');
const burger = document.querySelector('.burger');

if(burgerIcon && burger){

  burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('active');
    burger.classList.toggle('active');
    HTMLBody.classList.toggle('lock');
  });
}

const topMenuBtn = document.querySelector('.top-menu-btn');
const headerBottomMenu = document.querySelector('.header__bottom-menu');
const header = document.querySelector('.header');
if(topMenuBtn && headerBottomMenu){
  topMenuBtn.addEventListener('click', () => {
    headerBottomMenu.classList.add('active');
    header.classList.add('save-top')
  });
  document.addEventListener('scroll', (e)=> {
    if (window.scrollY > 100) {
      topMenuBtn.classList.add('active');
    } else {
      topMenuBtn.classList.remove('active');
    }
    if(headerBottomMenu.classList.contains('active')){
      headerBottomMenu.classList.add('hide');
      setTimeout(()=> {
        headerBottomMenu.classList.remove('hide');
        headerBottomMenu.classList.remove('active');
        header.classList.remove('save-top');
      }, 300);
    }
  });
}



