import Swiper, {Navigation} from 'swiper/core';
Swiper.use([Navigation]);

const swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });