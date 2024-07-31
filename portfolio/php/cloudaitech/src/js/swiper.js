import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
import Navigation from 'https://cdn.jsdelivr.net/npm/swiper@11/modules/navigation.min.mjs';

const swiper = new Swiper('.swiper.depositions', {
    modules: [ Navigation ],
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    spaceBetween: 20,
    breakpoints: {
        360: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

const swiperTeam = new Swiper('.team .swiper', {
  modules: [ Navigation ],
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  spaceBetween: 20,
  slidesPerView: 1,
});

const swiperCases = new Swiper('.cases .swiper', {
  modules: [ Navigation ],
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: false,
  spaceBetween: 0,
   breakpoints: {
        360: {
          slidesPerView: 1,
          loopFillGroupWithBlank: true,
          centeredSlides: true,
        },
        768: {
          slidesPerView: 2,
          centeredSlides: false,
          loopFillGroupWithBlank: false,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});