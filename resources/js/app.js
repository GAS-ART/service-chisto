import './bootstrap';
import {popUp} from './modules/popup.js';
import './modules/AsyncFormSending.js';
import "./modules/swiper.js";

window.onload = function () {

    const HTMLBody = document.querySelector('body')

    const burgerIcon = document.querySelector('.burger_icon');
    const burger = document.querySelector('.burger');

    if (burgerIcon && burger) {

        burgerIcon.addEventListener('click', () => {
            burgerIcon.classList.toggle('active');
            burger.classList.toggle('active');
            HTMLBody.classList.toggle('lock');
        });
    }

//popup
    const popupLinks = document.querySelectorAll('.link-on-popup');
    popupLinks.forEach(popupLink => {
        popupLink.addEventListener('click', () => popUp(popupLink.dataset.popup));
    });

    const topMenuBtn = document.querySelector('.top-menu-btn');
    const headerBottomMenu = document.querySelector('.header__bottom-menu');
    const header = document.querySelector('.header');
    if (topMenuBtn && headerBottomMenu) {
        topMenuBtn.addEventListener('click', () => {
            headerBottomMenu.classList.add('active');
            header.classList.add('save-top')
        });
        document.addEventListener('scroll', (e) => {
            if (window.scrollY > 100) {
                topMenuBtn.classList.add('active');
            } else {
                topMenuBtn.classList.remove('active');
            }
            if (headerBottomMenu.classList.contains('active')) {
                headerBottomMenu.classList.add('hide');
                setTimeout(() => {
                    headerBottomMenu.classList.remove('hide');
                    headerBottomMenu.classList.remove('active');
                    header.classList.remove('save-top');
                }, 300);
            }
        });
    }


//Set CSS variables

    function svgVariables() {
        /* const polisherWidth = document.querySelector('.polisher svg').clientWidth; */
        const styleTag = document.querySelector("head style");
        const cleanerImageheigt = document.querySelector('.brush').clientHeight
        const sofaImageWidts = document.querySelector('.sofa').clientWidth
        //--polisher-width: ${polisherWidth}px;
        styleTag.innerHTML = `:root {--cleaner-icon-height: ${cleanerImageheigt}px; --sofa-width: ${sofaImageWidts}px;}`;
    }

    svgVariables();

    window.addEventListener('resize', svgVariables);

    /* const styleTag = document.querySelector("head style");
    styleTag.innerHTML += `:root { --scrollbar-width: ${scrollbarWidth}px; }`; */

//Animation
    document.querySelector('.window').classList.add('active');
    document.querySelector('.mop').classList.add('active');
    document.querySelector('.vacun-cleaner').classList.add('active');
    setTimeout(() => document.querySelector('.garbage').classList.add('active'), 5800);
    setTimeout(() => document.querySelector('.garbage').classList.add('visible'), 7200);
    setTimeout(() => document.querySelector('.brush').classList.add('active'), 6400);
    setTimeout(() => document.querySelector('.brush').classList.add('visible'), 7200);
    setTimeout(() => document.querySelector('.sofa').classList.add('active'), 7500);
    setTimeout(() => document.querySelector('.sofa').classList.add('visible'), 9000);


//Showe-more-mobile
    const showMoreBtn = document.querySelectorAll('.show-more-btn');

    showMoreBtn.forEach(btn => {
            const animatedEl = btn.previousElementSibling
            const height = animatedEl.scrollHeight;
            btn.addEventListener('click', () => {
                animatedEl.style.height = height + 'px';
                btn.remove();
                btn.classList.add('inactive');
                setTimeout(() => {
                    animatedEl.style.height = 'auto';
                }, 1000)
            });
    });

//Changed Select Color
  const selects = document.querySelectorAll('select');

  function changeSelectHandler() {
    this.style.color = '#000000';
    this.removeEventListener('change', changeSelectHandler);
  }

  selects.forEach(select => {
    select.addEventListener('change', changeSelectHandler);
  });

  //End onloud function
}
