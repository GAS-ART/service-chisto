import Swiper, { Navigation } from 'swiper';


// init Swiper:
new Swiper('.clients__slider', {
  // configure Swiper to use modules
  modules: [Navigation],
  simulateTouch: true,
  slidesPerView: 1,
  spaceBetween: 25,
  loop: true,
  speed: 800,
  navigation: {
    nextEl: '.clients__slider-next',
    prevEl: '.clients__slider-prev',
  },
  breakpoints: {
    1180: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
  },
});